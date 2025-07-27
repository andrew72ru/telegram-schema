<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a group of notifications.
 */
class NotificationGroup implements \JsonSerializable
{
    public function __construct(
        /** Unique persistent auto-incremented from 1 identifier of the notification group */
        #[SerializedName('id')]
        private int $id,
        /** Type of the group */
        #[SerializedName('type')]
        private NotificationGroupType|null $type = null,
        /** Identifier of a chat to which all notifications in the group belong */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Total number of active notifications in the group */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The list of active notifications */
        #[SerializedName('notifications')]
        private array|null $notifications = null,
    ) {
    }

    /**
     * Get Unique persistent auto-incremented from 1 identifier of the notification group.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique persistent auto-incremented from 1 identifier of the notification group.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Type of the group.
     */
    public function getType(): NotificationGroupType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the group.
     */
    public function setType(NotificationGroupType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Identifier of a chat to which all notifications in the group belong.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat to which all notifications in the group belong.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Total number of active notifications in the group.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Total number of active notifications in the group.
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The list of active notifications.
     */
    public function getNotifications(): array|null
    {
        return $this->notifications;
    }

    /**
     * Set The list of active notifications.
     */
    public function setNotifications(array|null $notifications): self
    {
        $this->notifications = $notifications;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationGroup',
            'id' => $this->getId(),
            'type' => $this->getType(),
            'chat_id' => $this->getChatId(),
            'total_count' => $this->getTotalCount(),
            'notifications' => $this->getNotifications(),
        ];
    }
}
