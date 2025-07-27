<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The transaction is a deposit of Telegram Stars from App Store; for regular users only.
 */
class StarTransactionTypeAppStoreDeposit extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeAppStoreDeposit',
        ];
    }
}
