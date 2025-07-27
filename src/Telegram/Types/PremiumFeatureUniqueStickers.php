<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to use premium stickers with unique effects.
 */
class PremiumFeatureUniqueStickers extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureUniqueStickers',
        ];
    }
}
