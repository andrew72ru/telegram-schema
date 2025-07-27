<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a string option @value The value of the option.
 */
class OptionValueString extends OptionValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'optionValueString',
            'value' => $this->getValue(),
        ];
    }
}
