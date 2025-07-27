<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A deleted chat photo.
 */
class MessageChatDeletePhoto extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatDeletePhoto',
        ];
    }
}
