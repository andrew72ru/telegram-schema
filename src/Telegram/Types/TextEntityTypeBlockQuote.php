<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Text that must be formatted as if inside a blockquote HTML tag; not supported in secret chats.
 */
class TextEntityTypeBlockQuote extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeBlockQuote',
        ];
    }
}
