<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of stories posted per month.
 */
class PremiumLimitTypeMonthlyPostedStoryCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeMonthlyPostedStoryCount',
        ];
    }
}
