<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of favorite stickers.
 */
class PremiumLimitTypeFavoriteStickerCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeFavoriteStickerCount',
        ];
    }
}
