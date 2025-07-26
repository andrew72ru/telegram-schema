<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Withdrawal failed
 */
class RevenueWithdrawalStateFailed extends RevenueWithdrawalState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'revenueWithdrawalStateFailed',
        ];
    }
}
