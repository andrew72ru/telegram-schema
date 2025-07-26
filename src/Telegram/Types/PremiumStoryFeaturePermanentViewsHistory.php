<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to check who opened the current user's stories after they expire
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
