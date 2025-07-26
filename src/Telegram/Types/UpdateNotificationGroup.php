<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A list of active notifications in a notification group has changed
 */
class UpdateNotificationGroup extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique notification group identifier */
        #[SerializedName('notification_group_id')]
        private int $notificationGroupId,
        /** New type of the notification group */
        #[SerializedName('type')]
        private NotificationGroupType|null $type = null,
        /** Identifier of a chat to which all notifications in the group belong */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Chat identifier, which notification settings must be applied to the added notifications */
        #[SerializedName('notification_settings_chat_id')]
        private int $notificationSettingsChatId,
        /** Identifier of the notification sound to be played; 0 if sound is disabled */
        #[SerializedName('notification_sound_id')]
        private int $notificationSoundId,
        /** Total number of unread notifications in the group, can be bigger than number of active notifications */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** List of added group notifications, sorted by notification identifier */
        #[SerializedName('added_notifications')]
        private array|null $addedNotifications = null,
        /** Identifiers of removed group notifications, sorted by notification identifier */
        #[SerializedName('removed_notification_ids')]
        private array|null $removedNotificationIds = null,
    ) {
    }

    /**
     * Get Unique notification group identifier
     */
    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    /**
     * Set Unique notification group identifier
     */
    public function setNotificationGroupId(int $notificationGroupId): self
    {
        $this->notificationGroupId = $notificationGroupId;

        return $this;
    }

    /**
     * Get New type of the notification group
     */
    public function getType(): NotificationGroupType|null
    {
        return $this->type;
    }

    /**
     * Set New type of the notification group
     */
    public function setType(NotificationGroupType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Identifier of a chat to which all notifications in the group belong
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat to which all notifications in the group belong
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Chat identifier, which notification settings must be applied to the added notifications
     */
    public function getNotificationSettingsChatId(): int
    {
        return $this->notificationSettingsChatId;
    }

    /**
     * Set Chat identifier, which notification settings must be applied to the added notifications
     */
    public function setNotificationSettingsChatId(int $notificationSettingsChatId): self
    {
        $this->notificationSettingsChatId = $notificationSettingsChatId;

        return $this;
    }

    /**
     * Get Identifier of the notification sound to be played; 0 if sound is disabled
     */
    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }

    /**
     * Set Identifier of the notification sound to be played; 0 if sound is disabled
     */
    public function setNotificationSoundId(int $notificationSoundId): self
    {
        $this->notificationSoundId = $notificationSoundId;

        return $this;
    }

    /**
     * Get Total number of unread notifications in the group, can be bigger than number of active notifications
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Total number of unread notifications in the group, can be bigger than number of active notifications
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get List of added group notifications, sorted by notification identifier
     */
    public function getAddedNotifications(): array|null
    {
        return $this->addedNotifications;
    }

    /**
     * Set List of added group notifications, sorted by notification identifier
     */
    public function setAddedNotifications(array|null $addedNotifications): self
    {
        $this->addedNotifications = $addedNotifications;

        return $this;
    }

    /**
     * Get Identifiers of removed group notifications, sorted by notification identifier
     */
    public function getRemovedNotificationIds(): array|null
    {
        return $this->removedNotificationIds;
    }

    /**
     * Set Identifiers of removed group notifications, sorted by notification identifier
     */
    public function setRemovedNotificationIds(array|null $removedNotificationIds): self
    {
        $this->removedNotificationIds = $removedNotificationIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNotificationGroup',
            'notification_group_id' => $this->getNotificationGroupId(),
            'type' => $this->getType(),
            'chat_id' => $this->getChatId(),
            'notification_settings_chat_id' => $this->getNotificationSettingsChatId(),
            'notification_sound_id' => $this->getNotificationSoundId(),
            'total_count' => $this->getTotalCount(),
            'added_notifications' => $this->getAddedNotifications(),
            'removed_notification_ids' => $this->getRemovedNotificationIds(),
        ];
    }
}
