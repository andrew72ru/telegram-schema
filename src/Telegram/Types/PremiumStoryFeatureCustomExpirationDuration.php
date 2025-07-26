<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to set custom expiration duration for stories
 */
class PremiumStoryFeatureCustomExpirationDuration extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeatureCustomExpirationDuration',
        ];
    }
}
