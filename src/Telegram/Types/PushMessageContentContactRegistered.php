<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A contact has registered with Telegram.
 */
class PushMessageContentContactRegistered extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentContactRegistered',
        ];
    }
}
