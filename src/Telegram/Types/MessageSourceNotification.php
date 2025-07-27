<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from a notification.
 */
class MessageSourceNotification extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceNotification',
        ];
    }
}
