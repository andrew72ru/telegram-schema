<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notification settings for some type of chats were updated @scope Types of chats for which notification settings were updated @notification_settings The new notification settings
 */
class UpdateScopeNotificationSettings extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('scope')]
        private NotificationSettingsScope|null $scope = null,
        #[SerializedName('notification_settings')]
        private ScopeNotificationSettings|null $notificationSettings = null,
    ) {
    }

    public function getScope(): NotificationSettingsScope|null
    {
        return $this->scope;
    }

    public function setScope(NotificationSettingsScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    public function getNotificationSettings(): ScopeNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(ScopeNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateScopeNotificationSettings',
            'scope' => $this->getScope(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
