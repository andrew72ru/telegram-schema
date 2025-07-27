<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the value of an option by its name. (Check the list of available options on https://core.telegram.org/tdlib/options.) Can be called before authorization. Can be called synchronously for options "version" and "commit_hash".
 */
class GetOption extends OptionValue implements \JsonSerializable
{
    public function __construct(
        /** The name of the option */
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    /**
     * Get The name of the option.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set The name of the option.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getOption',
            'name' => $this->getName(),
        ];
    }
}
