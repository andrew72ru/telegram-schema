<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a transaction of an unsupported type
 */
class StarTransactionTypeUnsupported extends StarTransactionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeUnsupported',
        ];
    }
}
