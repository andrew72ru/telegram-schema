<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A notification was changed @notification_group_id Unique notification group identifier @notification Changed notification.
 */
class UpdateNotification extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_group_id')]
        private int $notificationGroupId,
        #[SerializedName('notification')]
        private Notification|null $notification = null,
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

    public function getNotification(): Notification|null
    {
        return $this->notification;
    }

    public function setNotification(Notification|null $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNotification',
            'notification_group_id' => $this->getNotificationGroupId(),
            'notification' => $this->getNotification(),
        ];
    }
}
