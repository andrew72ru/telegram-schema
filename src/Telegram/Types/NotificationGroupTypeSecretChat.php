<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A group containing a notification of type notificationTypeNewSecretChat.
 */
class NotificationGroupTypeSecretChat extends NotificationGroupType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationGroupTypeSecretChat',
        ];
    }
}
