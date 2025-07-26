<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the notification settings of a forum topic
 */
class SetForumTopicNotificationSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier of the forum topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever */
        #[SerializedName('notification_settings')]
        private ChatNotificationSettings|null $notificationSettings = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message thread identifier of the forum topic
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier of the forum topic
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever
     */
    public function getNotificationSettings(): ChatNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    /**
     * Set New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever
     */
    public function setNotificationSettings(ChatNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setForumTopicNotificationSettings',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
