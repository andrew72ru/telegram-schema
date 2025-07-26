<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a numeric JSON value @value The value
 */
class JsonValueNumber extends JsonValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private float $value,
    ) {
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'jsonValueNumber',
            'value' => $this->getValue(),
        ];
    }
}
