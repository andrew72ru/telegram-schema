<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Increased limits.
 */
class PremiumFeatureIncreasedLimits extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureIncreasedLimits',
        ];
    }
}
