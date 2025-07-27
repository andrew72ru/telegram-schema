<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to use custom emoji stickers in message texts and captions.
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
