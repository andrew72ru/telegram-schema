<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notification settings for reactions were updated @notification_settings The new notification settings
 */
class UpdateReactionNotificationSettings extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_settings')]
        private ReactionNotificationSettings|null $notificationSettings = null,
    ) {
    }

    public function getNotificationSettings(): ReactionNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(ReactionNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateReactionNotificationSettings',
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
