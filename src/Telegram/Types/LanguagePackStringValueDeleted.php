<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A deleted language pack string, the value must be taken from the built-in English language pack
 */
class LanguagePackStringValueDeleted extends LanguagePackStringValue implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'languagePackStringValueDeleted',
        ];
    }
}
