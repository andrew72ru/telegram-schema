<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message will be sent when the other user is online. Applicable to private chats only and when the exact online status of the other user is known.
 */
class MessageSchedulingStateSendWhenOnline extends MessageSchedulingState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSchedulingStateSendWhenOnline',
        ];
    }
}
