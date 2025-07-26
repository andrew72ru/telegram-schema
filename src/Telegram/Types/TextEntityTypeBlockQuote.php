<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Text that must be formatted as if inside a blockquote HTML tag; not supported in secret chats
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
