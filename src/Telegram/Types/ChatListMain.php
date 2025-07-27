<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A main list of chats.
 */
class ChatListMain extends ChatList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatListMain',
        ];
    }
}
