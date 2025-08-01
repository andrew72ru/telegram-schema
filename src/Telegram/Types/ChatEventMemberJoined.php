<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A new member joined the chat.
 */
class ChatEventMemberJoined extends ChatEventAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberJoined',
        ];
    }
}
