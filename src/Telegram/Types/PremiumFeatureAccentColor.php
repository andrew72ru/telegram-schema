<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to choose accent color for replies and user profile.
 */
class PremiumFeatureAccentColor extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureAccentColor',
        ];
    }
}
