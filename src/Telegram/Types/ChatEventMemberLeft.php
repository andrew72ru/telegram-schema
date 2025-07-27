<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A member left the chat.
 */
class ChatEventMemberLeft extends ChatEventAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberLeft',
        ];
    }
}
