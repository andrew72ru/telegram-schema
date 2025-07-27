<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A group containing notifications of type notificationTypeNewMessage and notificationTypeNewPushMessage with unread mentions of the current user, replies to their messages, or a pinned message.
 */
class NotificationGroupTypeMentions extends NotificationGroupType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationGroupTypeMentions',
        ];
    }
}
