<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Withdrawal is pending.
 */
class RevenueWithdrawalStatePending extends RevenueWithdrawalState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'revenueWithdrawalStatePending',
        ];
    }
}
