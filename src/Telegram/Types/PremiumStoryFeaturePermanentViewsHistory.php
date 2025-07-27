<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to check who opened the current user's stories after they expire.
 */
class PremiumStoryFeaturePermanentViewsHistory extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeaturePermanentViewsHistory',
        ];
    }
}
