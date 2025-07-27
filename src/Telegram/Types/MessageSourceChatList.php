<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from a chat list or a forum topic list.
 */
class MessageSourceChatList extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceChatList',
        ];
    }
}
