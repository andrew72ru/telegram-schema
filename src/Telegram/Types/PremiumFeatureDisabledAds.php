<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Disabled ads.
 */
class PremiumFeatureDisabledAds extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureDisabledAds',
        ];
    }
}
