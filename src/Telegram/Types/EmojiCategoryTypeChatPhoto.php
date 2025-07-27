<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The category must be used for chat photo emoji selection.
 */
class EmojiCategoryTypeChatPhoto extends EmojiCategoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategoryTypeChatPhoto',
        ];
    }
}
