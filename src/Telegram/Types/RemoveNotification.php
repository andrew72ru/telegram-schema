<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes an active notification from notification list. Needs to be called only if the notification is removed by the current user @notification_group_id Identifier of notification group to which the notification belongs @notification_id Identifier of removed notification.
 */
class RemoveNotification extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_group_id')]
        private int $notificationGroupId,
        #[SerializedName('notification_id')]
        private int $notificationId,
    ) {
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function setNotificationGroupId(int $notificationGroupId): self
    {
        $this->notificationGroupId = $notificationGroupId;

        return $this;
    }

    public function getNotificationId(): int
    {
        return $this->notificationId;
    }

    public function setNotificationId(int $notificationId): self
    {
        $this->notificationId = $notificationId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeNotification',
            'notification_group_id' => $this->getNotificationGroupId(),
            'notification_id' => $this->getNotificationId(),
        ];
    }
}
