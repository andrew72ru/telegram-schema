<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns users banned from the chat; can be used only by administrators in a supergroup or in a channel.
 */
class ChatMembersFilterBanned extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterBanned',
        ];
    }
}
