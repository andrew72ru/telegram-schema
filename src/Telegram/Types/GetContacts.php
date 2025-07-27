<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all contacts of the user.
 */
class GetContacts extends Users implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getContacts',
        ];
    }
}
