<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the notification settings of a chat. Notification settings of a chat with the current user (Saved Messages) can't be changed
 */
class SetChatNotificationSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New notification settings for the chat. If the chat is muted for more than 366 days, it is considered to be muted forever */
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
     * Get New notification settings for the chat. If the chat is muted for more than 366 days, it is considered to be muted forever
     */
    public function getNotificationSettings(): ChatNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    /**
     * Set New notification settings for the chat. If the chat is muted for more than 366 days, it is considered to be muted forever
     */
    public function setNotificationSettings(ChatNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatNotificationSettings',
            'chat_id' => $this->getChatId(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
