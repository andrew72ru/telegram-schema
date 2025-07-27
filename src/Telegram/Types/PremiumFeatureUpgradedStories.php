<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to use many additional features for stories.
 */
class PremiumFeatureUpgradedStories extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureUpgradedStories',
        ];
    }
}
