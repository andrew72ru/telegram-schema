<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is incoming and increases the number of owned Telegram Stars
 */
class StarTransactionDirectionIncoming extends StarTransactionDirection implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionDirectionIncoming',
        ];
    }
}
