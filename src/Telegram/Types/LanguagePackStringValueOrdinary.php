<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An ordinary language pack string @value String value.
 */
class LanguagePackStringValueOrdinary extends LanguagePackStringValue implements \JsonSerializable
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
            '@type' => 'languagePackStringValueOrdinary',
            'value' => $this->getValue(),
        ];
    }
}
