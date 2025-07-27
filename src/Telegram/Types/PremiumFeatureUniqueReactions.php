<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to use more reactions.
 */
class PremiumFeatureUniqueReactions extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureUniqueReactions',
        ];
    }
}
