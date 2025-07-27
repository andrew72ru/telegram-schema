<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to use all available message effects.
 */
class PremiumFeatureMessageEffects extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureMessageEffects',
        ];
    }
}
