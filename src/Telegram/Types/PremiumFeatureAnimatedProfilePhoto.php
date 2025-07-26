<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Profile photo animation on message and chat screens
 */
class PremiumFeatureAnimatedProfilePhoto extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureAnimatedProfilePhoto',
        ];
    }
}
