<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Clears all imported contacts, contact list remains unchanged.
 */
class ClearImportedContacts extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearImportedContacts',
        ];
    }
}
