<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stories of the current user are displayed before stories of non-Premium contacts, supergroups, and channels
 */
class PremiumStoryFeaturePriorityOrder extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeaturePriorityOrder',
        ];
    }
}
