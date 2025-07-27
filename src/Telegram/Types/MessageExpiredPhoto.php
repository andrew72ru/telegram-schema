<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A self-destructed photo message.
 */
class MessageExpiredPhoto extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageExpiredPhoto',
        ];
    }
}
