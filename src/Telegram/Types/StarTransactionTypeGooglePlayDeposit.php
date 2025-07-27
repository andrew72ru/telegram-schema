<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The transaction is a deposit of Telegram Stars from Google Play; for regular users only.
 */
class StarTransactionTypeGooglePlayDeposit extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeGooglePlayDeposit',
        ];
    }
}
