<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Pins a message in a chat. A message can be pinned only if messageProperties.can_be_pinned.
 */
class PinChatMessage extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the new pinned message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Pass true to disable notification about the pinned message. Notifications are always disabled in channels and private chats */
        #[SerializedName('disable_notification')]
        private bool $disableNotification,
        /** Pass true to pin the message only for self; private chats only */
        #[SerializedName('only_for_self')]
        private bool $onlyForSelf,
    ) {
    }

    /**
     * Get Identifier of the chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the new pinned message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the new pinned message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true to disable notification about the pinned message. Notifications are always disabled in channels and private chats.
     */
    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    /**
     * Set Pass true to disable notification about the pinned message. Notifications are always disabled in channels and private chats.
     */
    public function setDisableNotification(bool $disableNotification): self
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    /**
     * Get Pass true to pin the message only for self; private chats only.
     */
    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    /**
     * Set Pass true to pin the message only for self; private chats only.
     */
    public function setOnlyForSelf(bool $onlyForSelf): self
    {
        $this->onlyForSelf = $onlyForSelf;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pinChatMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'disable_notification' => $this->getDisableNotification(),
            'only_for_self' => $this->getOnlyForSelf(),
        ];
    }
}
