<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is unread yet.
 */
class MessageReadDateUnread extends MessageReadDate implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReadDateUnread',
        ];
    }
}
