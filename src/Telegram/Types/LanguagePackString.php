<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents one language pack string @key String key @value String value; pass null if the string needs to be taken from the built-in English language pack.
 */
class LanguagePackString implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('key')]
        private string $key,
        #[SerializedName('value')]
        private LanguagePackStringValue|null $value = null,
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

    public function getValue(): LanguagePackStringValue|null
    {
        return $this->value;
    }

    public function setValue(LanguagePackStringValue|null $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'languagePackString',
            'key' => $this->getKey(),
            'value' => $this->getValue(),
        ];
    }
}
