<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the value of an option. (Check the list of available options on https://core.telegram.org/tdlib/options.) Only writable options can be set. Can be called before authorization
 */
class SetOption extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The name of the option */
        #[SerializedName('name')]
        private string $name,
        /** The new value of the option; pass null to reset option value to a default value */
        #[SerializedName('value')]
        private OptionValue|null $value = null,
    ) {
    }

    /**
     * Get The name of the option
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set The name of the option
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The new value of the option; pass null to reset option value to a default value
     */
    public function getValue(): OptionValue|null
    {
        return $this->value;
    }

    /**
     * Set The new value of the option; pass null to reset option value to a default value
     */
    public function setValue(OptionValue|null $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setOption',
            'name' => $this->getName(),
            'value' => $this->getValue(),
        ];
    }
}
