<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The category must be used by default for regular sticker selection. It may contain greeting emoji category and premium stickers.
 */
class EmojiCategoryTypeRegularStickers extends EmojiCategoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategoryTypeRegularStickers',
        ];
    }
}
