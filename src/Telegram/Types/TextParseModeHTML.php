<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The text uses HTML-style formatting. The same as Telegram Bot API "HTML" parse mode.
 */
class TextParseModeHTML extends TextParseMode implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textParseModeHTML',
        ];
    }
}
