<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Resets all chat and scope notification settings to their default values. By default, all chats are unmuted and message previews are shown.
 */
class ResetAllNotificationSettings extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetAllNotificationSettings',
        ];
    }
}
