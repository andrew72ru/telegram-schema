<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A new member was accepted to the chat by an administrator.
 */
class MessageChatJoinByRequest extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatJoinByRequest',
        ];
    }
}
