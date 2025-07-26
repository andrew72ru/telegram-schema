<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Clears all imported contacts, contact list remains unchanged
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
