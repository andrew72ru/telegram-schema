<?php declare(strict_types=1);

namespace App\Command;

use Nette\PhpGenerator\{ClassType, Literal, PhpFile, PhpNamespace, PsrPrinter};
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\{InputInterface, InputOption};
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(
    name: 'app:generate-telegram-classes',
    description: 'Generate PHP classes from td_api.tl file',
)]
class GenerateTelegramClassesCommand extends Command
{
    private const TYPE_MAPPING = [
        'int32' => 'int',
        'int53' => 'int',
        'int64' => 'int',
        'double' => 'float',
        'string' => 'string',
        'bytes' => 'string',
        'Bool' => 'bool',
    ];

    private array $comments = [];

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly Filesystem $filesystem,
    ) {
        parent::__construct();
    }

    #[\Override]
    protected function configure(): void
    {
        $this
            ->addOption('output-dir', null, InputOption::VALUE_REQUIRED, 'Output directory for generated classes', 'src/Telegram/Types')
            ->addOption('namespace', null, InputOption::VALUE_REQUIRED, 'Namespace for generated classes', 'App\\Telegram\\Types')
            ->addOption('td_api_url', null, InputOption::VALUE_REQUIRED, 'URL of td_api.tl file', 'https://raw.githubusercontent.com/tdlib/td/refs/heads/master/td/generate/scheme/td_api.tl')
        ;
    }

    #[\Override]
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $outputDir = $input->getOption('output-dir');
        $namespace = $input->getOption('namespace');

        $io->title('Generating Telegram API classes');

        // Create an output directory if it doesn't exist
        if (!\is_dir($outputDir) && !\mkdir($outputDir, 0777, true) && !\is_dir($outputDir)) {
            $io->error("Failed to create output directory: $outputDir");

            return Command::FAILURE;
        }

        $io->success("Created output directory: $outputDir");

        try {
            $tlContent = $this->httpClient->request('GET', $input->getOption('td_api_url'))->getContent();
        } catch (\Throwable $e) {
            $io->error($e->getMessage());

            return Command::FAILURE;
        }
        $lines = \explode("\n", $tlContent);

        // First pass: collect all base types that need to be generated
        $baseTypes = $this->collectBaseTypes($lines, $namespace, $outputDir);
        $io->info(\sprintf('Found %d base types that need to be generated', \count($baseTypes)));

        // Parse the file and generate classes
        $this->parseAndGenerateClasses($lines, $outputDir, $namespace, $baseTypes, $io);

        $io->success('Telegram API classes generated successfully');

        return Command::SUCCESS;
    }

    /**
     * Collect all base types that need to be generated as abstract classes.
     */
    private function collectBaseTypes(array $lines, string $namespace, string $path): array
    {
        $baseTypes = [];
        $definedTypes = [];

        foreach ($lines as $line) {
            $line = \trim($line);

            // Skip empty lines and comments
            if (empty($line) || \str_starts_with($line, '//@')) {
                continue;
            }

            // Skip vector definition and basic types
            if (\str_starts_with($line, 'vector {')
                || \in_array($line, ['double ? = Double;', 'string ? = String;', 'int32 = Int32;', 'int53 = Int53;', 'int64 = Int64;', 'bytes = Bytes;', 'boolFalse = Bool;', 'boolTrue = Bool;'])) {
                continue;
            }

            // Process type definition
            if (\str_contains($line, ' = ') && \str_ends_with($line, ';')) {
                $line = \rtrim($line, ';');
                [$definition, $baseType] = \explode(' = ', $line, 2);
                $parts = \preg_split('/\s+/', $definition);
                $typeName = $parts[0];

                // Skip if it's not a proper class definition
                if (empty($typeName) || !\preg_match('/^[a-zA-Z0-9]+$/', $typeName)) {
                    continue;
                }

                // Add to defined types
                $definedTypes[] = $typeName;

                // Add base type if it's not the same as the type name and not 'Type'
                if ($baseType !== $typeName && $baseType !== 'Type') {
                    $baseTypes[$baseType] = true;
                }
            }
        }

        // Remove base types that are already defined
        foreach ($definedTypes as $type) {
            unset($baseTypes[$type]);
        }

        return \array_keys($baseTypes);
    }

    private function parseAndGenerateClasses(array $lines, string $outputDir, string $namespace, array $baseTypes, SymfonyStyle $io): void
    {
        $classCount = 0;
        $this->comments = [];

        // First, generate abstract base classes
        foreach ($baseTypes as $baseType) {
            $this->generateAbstractBaseClass($baseType, $outputDir, $namespace);
            ++$classCount;
        }

        $file = new PhpFile();
        $file->setStrictTypes();
        $ns = $file->addNamespace($namespace);
        $enum = $ns->addEnum('Mapping');
        $enum->setType('string');

        foreach ($lines as $line) {
            $line = \trim($line);

            // Skip empty lines
            if (empty($line)) {
                continue;
            }

            // Collect comments
            if (\str_starts_with($line, '//@')) {
                $this->processComment($line);
                continue;
            }

            // Skip vector definition and basic types
            if (\str_starts_with($line, 'vector {')
                || \in_array($line, ['double ? = Double;', 'string ? = String;', 'int32 = Int32;', 'int53 = Int53;', 'int64 = Int64;', 'bytes = Bytes;', 'boolFalse = Bool;', 'boolTrue = Bool;'])) {
                continue;
            }

            // Process type definition
            if (\str_contains($line, ' = ') && \str_ends_with($line, ';')) {
                $classGenerated = $this->generateClass($line, $outputDir, $namespace);
                if ($classGenerated === null) {
                    continue;
                }
                $line = \rtrim($line, ';');
                [$definition] = \explode(' = ', $line, 2);
                $case = \preg_split('/\s+/', $definition)[0];

                $enum->addCase($case, new Literal(\sprintf('%s::class', $classGenerated)));

                ++$classCount;
                // Clear comments for the next class
                $this->comments = [];
            }
        }

        $printer = new PsrPrinter();
        $enumFilename = \sprintf('%s/%s.php', $outputDir, $enum->getName());
        $dir = \dirname($enumFilename);
        $this->filesystem->mkdir($dir);
        $this->filesystem->dumpFile($enumFilename, $printer->printFile($file));

        $io->info("Generated $classCount classes");
    }

    /**
     * Generate an abstract base class.
     */
    private function generateAbstractBaseClass(string $baseType, string $outputDir, string $namespace): void
    {
        // Create a PHP file
        $file = new PhpFile();
        $file->setStrictTypes();

        // Create a namespace
        $ns = $file->addNamespace($namespace);

        // Create an abstract class
        $class = $ns->addClass($this->formatClassName($baseType));
        $class->setAbstract(true);
        $class->addImplement(\JsonSerializable::class);

        // Add a comment
        $class->addComment("Abstract base class for {$this->formatClassName($baseType)} types.");

        // Add abstract jsonSerialize method
        $method = $class->addMethod('jsonSerialize');
        $method->setPublic();
        $method->setAbstract(true);
        $method->setReturnType('array');

        // Save the file
        $printer = new PsrPrinter();
        $classFilename = $this->formatClassName($baseType) . '.php';
        $classPath = "$outputDir/$classFilename";

        // Create a directory if it doesn't exist
        $dir = \dirname($classPath);
        $this->filesystem->mkdir($dir);
        $this->filesystem->dumpFile($classPath, $printer->printFile($file));
    }

    private function processComment(string $comment): void
    {
        $comment = \substr($comment, 3); // Remove //@

        if (\str_starts_with($comment, 'class ')) {
            // This is a class comment, store the class name
            $parts = \explode(' ', $comment, 3);
            $this->comments[] = $comment;
        } else {
            $this->comments[] = $comment;
        }
    }

    public function generateClass(string $line, string $outputDir, string $namespace): string|null
    {
        // Remove trailing semicolon
        $line = \rtrim($line, ';');

        // Split into definition and base type
        [$definition, $baseType] = \explode(' = ', $line, 2);

        // Extract class name and properties
        $parts = \preg_split('/\s+/', $definition);
        $className = $parts[0];

        // Skip if it's not a proper class definition
        if (empty($className) || !\preg_match('/^[a-zA-Z0-9]+$/', $className)) {
            return null;
        }

        // No need to extract property definitions here as we'll handle them in the constructor

        // Create a PHP file
        $file = new PhpFile();
        $file->setStrictTypes();

        // Create a namespace
        $ns = $file->addNamespace($namespace);

        // Create a class
        $class = $ns->addClass($this->formatClassName($className));
        $class->addImplement(\JsonSerializable::class);

        // Set a parent class if needed
        if ($baseType !== $className && $baseType !== 'Type') {
            // Avoid self-inheritance
            if ($this->formatClassName($baseType) !== $this->formatClassName($className)) {
                $parentClass = $this->formatClassName($baseType);
                $class->setExtends("$namespace\\$parentClass");
            }
        }

        // Add class description from comments
        $classDescription = $this->extractClassDescription();

        // Only add class description, not property documentation
        if (!empty($classDescription)) {
            $class->addComment(\rtrim($classDescription, '.') . '.');
        }

        // Add constructor with property promotions
        $this->addConstructor($class, $parts, $ns);

        // Add jsonSerialize method
        $this->addJsonSerializeMethod($class, $parts);

        // Save the file
        $printer = new PsrPrinter();
        $classFilename = $this->formatClassName($className) . '.php';
        $classPath = "$outputDir/$classFilename";

        // Create a directory if it doesn't exist
        $dir = \dirname($classPath);
        $this->filesystem->mkdir($dir);
        $this->filesystem->dumpFile($classPath, $printer->printFile($file));

        return $this->formatClassName($className);
    }

    private function formatClassName(string $name): string
    {
        // Convert camelCase to PascalCase
        return \ucfirst($name);
    }

    /**
     * Convert snake_case to camelCase.
     */
    private function toCamelCase(string $name): string
    {
        // Replace underscores with spaces, then ucwords to capitalize each word, then remove spaces
        $camelCase = \str_replace('_', ' ', $name);
        $camelCase = \ucwords($camelCase);
        $camelCase = \str_replace(' ', '', $camelCase);

        // Make the first character lowercase
        return \lcfirst($camelCase);
    }

    private function extractClassDescription(): string
    {
        $description = '';

        // First, collect property types from the class definition
        foreach ($this->comments as $comment) {
            if (\str_starts_with($comment, 'class ')) {
                // Skip the class definition comment
                continue;
            }

            if (\str_starts_with($comment, 'description ')) {
                $description .= \substr($comment, 12) . "\n";
            }
        }

        return \trim($description);
    }

    private function addConstructor(ClassType $class, array $parts, PhpNamespace $namespace): void
    {
        // Skip the class name
        \array_shift($parts);

        // Only add the constructor if there are properties
        if (empty($parts)) {
            return;
        }

        $namespace->addUse(SerializedName::class);
        $constructor = $class->addMethod('__construct');
        $constructor->setPublic();

        foreach ($parts as $part) {
            if (\str_contains($part, ':')) {
                [$originalPropName, $propType] = \explode(':', $part, 2);

                // Convert snake_case to camelCase
                $camelPropName = $this->toCamelCase($originalPropName);

                // Add promoted property parameter
                $param = $constructor->addPromotedParameter($camelPropName);
                $param->setPrivate();

                // Add SerializedName attribute for the original snake_case name
                $param->addAttribute(SerializedName::class, [$originalPropName]);

                // Get PHP type
                $phpType = $this->mapType($propType);

                // Make a property nullable if it's optional
                if ($this->isOptionalType($propType)) {
                    // If the type is not already nullable, make it nullable
                    if (!\str_contains($phpType, '|null') && !\str_ends_with($phpType, '|null')) {
                        $phpType .= '|null';
                    }
                    $param->setDefaultValue(null);
                }

                $param->setType($phpType);

                // Add property description
                $propDescription = $this->getPropertyDescription($originalPropName);
                if (!empty($propDescription)) {
                    $param->addComment($propDescription);
                }

                // Add getter method
                $this->addGetter($class, $camelPropName, $originalPropName, $phpType, $propDescription);

                // Add setter method
                $this->addSetter($class, $camelPropName, $originalPropName, $phpType, $propDescription);
            }
        }
    }

    /**
     * Add a getter method for a property.
     */
    private function addGetter(ClassType $class, string $camelPropName, string $originalPropName, string $phpType, string $propDescription): void
    {
        $methodName = 'get' . \ucfirst($camelPropName);
        $method = $class->addMethod($methodName);
        $method->setPublic();
        $method->setReturnType($phpType);

        $docComment = '';
        if (!empty($propDescription)) {
            $docComment .= "Get $propDescription.\n\n";
        }
        $method->addComment($docComment);

        $method->setBody("return \$this->$camelPropName;");
    }

    /**
     * Add a setter method for a property.
     */
    private function addSetter(ClassType $class, string $camelPropName, string $originalPropName, string $phpType, string $propDescription): void
    {
        $methodName = 'set' . \ucfirst($camelPropName);
        $method = $class->addMethod($methodName);
        $method->setPublic();
        $method->setReturnType('self');

        $param = $method->addParameter($camelPropName);
        $param->setType($phpType);

        $docComment = '';
        if (!empty($propDescription)) {
            $docComment .= "Set $propDescription.\n\n";
        }
        $method->addComment($docComment);

        $method->setBody("\$this->$camelPropName = \$$camelPropName;\n\nreturn \$this;");
    }

    private function addJsonSerializeMethod(ClassType $class, array $parts): void
    {
        $method = $class->addMethod('jsonSerialize');
        $method->setPublic();
        $method->setReturnType('array');

        $body = "return [\n";
        $body .= "    '@type' => '" . \lcfirst($class->getName()) . "',\n";

        // Skip the class name
        \array_shift($parts);

        foreach ($parts as $part) {
            if (\str_contains($part, ':')) {
                [$originalPropName] = \explode(':', $part, 2);
                $camelPropName = $this->toCamelCase($originalPropName);
                $getterMethod = 'get' . \ucfirst($camelPropName);

                // Use original snake_case name as key, but camelCase getter method
                $body .= "    '$originalPropName' => \$this->$getterMethod(),\n";
            }
        }

        $body .= '];';
        $method->setBody($body);
    }

    private function getPropertyDescription(string $propName): string
    {
        foreach ($this->comments as $comment) {
            $parts = \explode(' ', $comment, 2);
            if (\count($parts) === 2 && \ltrim($parts[0], '@') === $propName) {
                return $parts[1];
            }
        }

        return '';
    }

    private function mapType(string $type): string
    {
        // Handle vector types
        if (\preg_match('/^vector<(.+)>$/', $type)) {
            return 'array'; // PHP arrays for vectors
        }

        // Map TL types to PHP types
        if (isset(self::TYPE_MAPPING[$type])) {
            return self::TYPE_MAPPING[$type];
        }

        // For custom types, use the class name with namespace
        if (\preg_match('/^[A-Z][a-zA-Z0-9]*$/', $type)) {
            return 'App\\Telegram\\Types\\' . $type;
        }

        // For custom types in camelCase, convert to PascalCase with namespace
        if (\preg_match('/^[a-z][a-zA-Z0-9]*$/', $type)) {
            return 'App\\Telegram\\Types\\' . \ucfirst($type);
        }

        // Default to mixed for unknown types
        return 'mixed';
    }

    private function isOptionalType(string $type): bool
    {
        // Basic types are required
        if (isset(self::TYPE_MAPPING[$type])) {
            return false;
        }

        // Vector types are optional
        if (\preg_match('/^vector<(.+)>$/', $type)) {
            return true;
        }

        // Custom types are optional
        return true;
    }
}
