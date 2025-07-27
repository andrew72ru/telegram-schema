<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A badge in the user's profile.
 */
class PremiumFeatureProfileBadge extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureProfileBadge',
        ];
    }
}
