<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all chat members, including restricted chat members.
 */
class ChatMembersFilterMembers extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterMembers',
        ];
    }
}
