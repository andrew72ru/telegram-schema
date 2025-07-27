<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of saved animations.
 */
class PremiumLimitTypeSavedAnimationCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeSavedAnimationCount',
        ];
    }
}
