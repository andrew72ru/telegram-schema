<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * New secret chat was created.
 */
class NotificationTypeNewSecretChat extends NotificationType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationTypeNewSecretChat',
        ];
    }
}
