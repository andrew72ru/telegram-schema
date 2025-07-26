<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allowed to use many additional features for stories
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
