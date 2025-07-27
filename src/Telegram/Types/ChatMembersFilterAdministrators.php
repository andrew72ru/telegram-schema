<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the owner and administrators.
 */
class ChatMembersFilterAdministrators extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterAdministrators',
        ];
    }
}
