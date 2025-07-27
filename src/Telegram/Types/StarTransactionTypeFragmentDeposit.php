<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The transaction is a deposit of Telegram Stars from Fragment; for regular users and bots only.
 */
class StarTransactionTypeFragmentDeposit extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeFragmentDeposit',
        ];
    }
}
