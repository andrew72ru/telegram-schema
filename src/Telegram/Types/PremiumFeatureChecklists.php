<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to create and use checklist messages.
 */
class PremiumFeatureChecklists extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureChecklists',
        ];
    }
}
