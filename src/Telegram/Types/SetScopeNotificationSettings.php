<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes notification settings for chats of a given type @scope Types of chats for which to change the notification settings @notification_settings The new notification settings for the given scope.
 */
class SetScopeNotificationSettings extends Ok implements \JsonSerializable
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
            '@type' => 'setScopeNotificationSettings',
            'scope' => $this->getScope(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
