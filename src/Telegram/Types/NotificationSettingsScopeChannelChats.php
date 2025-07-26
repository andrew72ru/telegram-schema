<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notification settings applied to all channel chats when the corresponding chat setting has a default value
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
