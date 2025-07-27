<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the total number of imported contacts.
 */
class GetImportedContactCount extends Count implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getImportedContactCount',
        ];
    }
}
