<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A self-destructed voice note message.
 */
class MessageExpiredVoiceNote extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageExpiredVoiceNote',
        ];
    }
}
