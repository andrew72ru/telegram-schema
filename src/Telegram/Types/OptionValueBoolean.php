<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a boolean option @value The value of the option.
 */
class OptionValueBoolean extends OptionValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private bool $value,
    ) {
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function setValue(bool $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'optionValueBoolean',
            'value' => $this->getValue(),
        ];
    }
}
