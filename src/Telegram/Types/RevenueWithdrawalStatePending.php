<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Withdrawal is pending
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
