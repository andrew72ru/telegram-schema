<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The category must be used by default (e.g., for custom emoji or animation search).
 */
class EmojiCategoryTypeDefault extends EmojiCategoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategoryTypeDefault',
        ];
    }
}
