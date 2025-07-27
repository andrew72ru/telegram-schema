<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A self-destructed video message.
 */
class MessageExpiredVideo extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageExpiredVideo',
        ];
    }
}
