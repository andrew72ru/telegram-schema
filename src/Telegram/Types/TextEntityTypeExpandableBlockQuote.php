<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Text that must be formatted as if inside a blockquote HTML tag and collapsed by default to 3 lines with the ability to show full text; not supported in secret chats.
 */
class TextEntityTypeExpandableBlockQuote extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeExpandableBlockQuote',
        ];
    }
}
