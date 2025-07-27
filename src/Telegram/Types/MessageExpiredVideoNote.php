<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A self-destructed video note message.
 */
class MessageExpiredVideoNote extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageExpiredVideoNote',
        ];
    }
}
