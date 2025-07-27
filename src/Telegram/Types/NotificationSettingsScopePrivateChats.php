<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Notification settings applied to all private and secret chats when the corresponding chat setting has a default value.
 */
class NotificationSettingsScopePrivateChats extends NotificationSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationSettingsScopePrivateChats',
        ];
    }
}
