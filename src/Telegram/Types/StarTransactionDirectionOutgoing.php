<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is outgoing and decreases the number of owned Telegram Stars
 */
class StarTransactionDirectionOutgoing extends StarTransactionDirection implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionDirectionOutgoing',
        ];
    }
}
