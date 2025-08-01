<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is typing a message.
 */
class ChatActionTyping extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionTyping',
        ];
    }
}
