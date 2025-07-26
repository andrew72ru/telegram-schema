<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a group of active notifications. Needs to be called only if the notification group is removed by the current user @notification_group_id Notification group identifier @max_notification_id The maximum identifier of removed notifications
 */
class RemoveNotificationGroup extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_group_id')]
        private int $notificationGroupId,
        #[SerializedName('max_notification_id')]
        private int $maxNotificationId,
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

    public function getMaxNotificationId(): int
    {
        return $this->maxNotificationId;
    }

    public function setMaxNotificationId(int $maxNotificationId): self
    {
        $this->maxNotificationId = $maxNotificationId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeNotificationGroup',
            'notification_group_id' => $this->getNotificationGroupId(),
            'max_notification_id' => $this->getMaxNotificationId(),
        ];
    }
}
