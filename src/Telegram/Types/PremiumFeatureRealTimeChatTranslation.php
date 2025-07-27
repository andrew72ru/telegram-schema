<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to translate chat messages real-time.
 */
class PremiumFeatureRealTimeChatTranslation extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureRealTimeChatTranslation',
        ];
    }
}
