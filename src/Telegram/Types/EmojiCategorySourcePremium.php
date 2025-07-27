<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The category contains premium stickers that must be found by getPremiumStickers.
 */
class EmojiCategorySourcePremium extends EmojiCategorySource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategorySourcePremium',
        ];
    }
}
