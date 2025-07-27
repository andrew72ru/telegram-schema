<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the period of inactivity after which the account of the current user will automatically be deleted.
 */
class GetAccountTtl extends AccountTtl implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAccountTtl',
        ];
    }
}
