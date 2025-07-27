<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether notifications for new gifts received by a channel chat are sent to the current user; requires can_post_messages administrator right in the chat.
 */
class ToggleChatGiftNotifications extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to enable notifications about new gifts owned by the channel chat; pass false to disable the notifications */
        #[SerializedName('are_enabled')]
        private bool $areEnabled,
    ) {
    }

    /**
     * Get Identifier of the channel chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true to enable notifications about new gifts owned by the channel chat; pass false to disable the notifications.
     */
    public function getAreEnabled(): bool
    {
        return $this->areEnabled;
    }

    /**
     * Set Pass true to enable notifications about new gifts owned by the channel chat; pass false to disable the notifications.
     */
    public function setAreEnabled(bool $areEnabled): self
    {
        $this->areEnabled = $areEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatGiftNotifications',
            'chat_id' => $this->getChatId(),
            'are_enabled' => $this->getAreEnabled(),
        ];
    }
}
