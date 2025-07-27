<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Notification settings applied to all channel chats when the corresponding chat setting has a default value.
 */
class NotificationSettingsScopeChannelChats extends NotificationSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationSettingsScopeChannelChats',
        ];
    }
}
