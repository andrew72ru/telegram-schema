<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to view last seen and read times of other users even if they can't view last seen or read time for the current user.
 */
class PremiumFeatureLastSeenTimes extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureLastSeenTimes',
        ];
    }
}
