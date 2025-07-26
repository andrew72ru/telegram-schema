<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allowed to use custom emoji stickers in message texts and captions
 */
class PremiumFeatureCustomEmoji extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureCustomEmoji',
        ];
    }
}
