<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an integer option @value The value of the option.
 */
class OptionValueInteger extends OptionValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private int $value,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'optionValueInteger',
            'value' => $this->getValue(),
        ];
    }
}
