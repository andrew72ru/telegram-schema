<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notification settings for a chat were changed @chat_id Chat identifier @notification_settings The new notification settings
 */
class UpdateChatNotificationSettings extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('notification_settings')]
        private ChatNotificationSettings|null $notificationSettings = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getNotificationSettings(): ChatNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(ChatNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatNotificationSettings',
            'chat_id' => $this->getChatId(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
