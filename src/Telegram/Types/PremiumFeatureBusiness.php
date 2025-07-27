<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to use Business features.
 */
class PremiumFeatureBusiness extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureBusiness',
        ];
    }
}
