<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a deposit of Telegram Stars from the Premium bot; for regular users only
 */
class StarTransactionTypePremiumBotDeposit extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypePremiumBotDeposit',
        ];
    }
}
