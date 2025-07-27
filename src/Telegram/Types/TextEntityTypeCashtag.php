<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A cashtag text, beginning with "$", consisting of capital English letters (e.g., "$USD"), and optionally containing a chat username at the end.
 */
class TextEntityTypeCashtag extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeCashtag',
        ];
    }
}
