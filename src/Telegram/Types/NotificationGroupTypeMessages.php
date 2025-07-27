<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A group containing notifications of type notificationTypeNewMessage and notificationTypeNewPushMessage with ordinary unread messages.
 */
class NotificationGroupTypeMessages extends NotificationGroupType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationGroupTypeMessages',
        ];
    }
}
