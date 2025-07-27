<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Notification settings applied to all basic group and supergroup chats when the corresponding chat setting has a default value.
 */
class NotificationSettingsScopeGroupChats extends NotificationSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationSettingsScopeGroupChats',
        ];
    }
}
