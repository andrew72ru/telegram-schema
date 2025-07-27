<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to set private chat background for both users.
 */
class PremiumFeatureBackgroundForBoth extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureBackgroundForBoth',
        ];
    }
}
