<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The transaction is a withdrawal of earned Telegram Stars to Telegram Ad platform; for bots and channel chats only.
 */
class StarTransactionTypeTelegramAdsWithdrawal extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeTelegramAdsWithdrawal',
        ];
    }
}
