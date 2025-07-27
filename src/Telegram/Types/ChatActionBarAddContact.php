<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat is a private or secret chat and the other user can be added to the contact list using the method addContact.
 */
class ChatActionBarAddContact extends ChatActionBar implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarAddContact',
        ];
    }
}
