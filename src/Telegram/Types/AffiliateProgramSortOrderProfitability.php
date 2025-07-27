<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The affiliate programs must be sorted by the profitability.
 */
class AffiliateProgramSortOrderProfitability extends AffiliateProgramSortOrder implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateProgramSortOrderProfitability',
        ];
    }
}
