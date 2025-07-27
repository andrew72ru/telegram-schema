<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to show an emoji status along with the user's name.
 */
class PremiumFeatureEmojiStatus extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureEmojiStatus',
        ];
    }
}
