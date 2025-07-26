<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
;

$rules = [
    '@Symfony' => true,
    'single_import_per_statement' => false,
    'group_import' => true,
    'array_indentation' => true,
    'blank_line_after_opening_tag' => false,
    'linebreak_after_opening_tag' => false,
    'yoda_style' => false,
    'concat_space' => ['spacing' => 'one'],
    'native_function_invocation' => [
        'exclude' => [],
        'include' => ['@internal'],
        'scope' => 'all',
        'strict' => false,
    ],
    'no_superfluous_phpdoc_tags' => true,
    'nullable_type_declaration' => ['syntax' => 'union'],
];

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder);
