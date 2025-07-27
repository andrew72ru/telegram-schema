<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A contact has registered with Telegram.
 */
class MessageContactRegistered extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageContactRegistered',
        ];
    }
}
