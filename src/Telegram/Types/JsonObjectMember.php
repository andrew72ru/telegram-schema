<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents one member of a JSON object @key Member's key @value Member's value
 */
class JsonObjectMember implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('key')]
        private string $key,
        #[SerializedName('value')]
        private JsonValue|null $value = null,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): JsonValue|null
    {
        return $this->value;
    }

    public function setValue(JsonValue|null $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'jsonObjectMember',
            'key' => $this->getKey(),
            'value' => $this->getValue(),
        ];
    }
}
