<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a boolean JSON value @value The value
 */
class JsonValueBoolean extends JsonValue implements \JsonSerializable
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
            '@type' => 'jsonValueBoolean',
            'value' => $this->getValue(),
        ];
    }
}
