<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum length of the user's bio.
 */
class PremiumLimitTypeBioLength extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeBioLength',
        ];
    }
}
