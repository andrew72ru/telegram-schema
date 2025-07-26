<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to set a custom emoji as a forum topic icon
 */
class PremiumFeatureForumTopicIcon extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureForumTopicIcon',
        ];
    }
}
