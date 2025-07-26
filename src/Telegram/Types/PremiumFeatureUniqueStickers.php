<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allowed to use premium stickers with unique effects
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
