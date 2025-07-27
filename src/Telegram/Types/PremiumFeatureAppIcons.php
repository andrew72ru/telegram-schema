<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to set a premium application icons.
 */
class PremiumFeatureAppIcons extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureAppIcons',
        ];
    }
}
