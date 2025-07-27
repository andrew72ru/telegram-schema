<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to choose better quality for viewed stories.
 */
class PremiumStoryFeatureVideoQuality extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeatureVideoQuality',
        ];
    }
}
