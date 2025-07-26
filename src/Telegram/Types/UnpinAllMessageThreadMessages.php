<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes all pinned messages from a forum topic; requires can_pin_messages member right in the supergroup
 */
class UnpinAllMessageThreadMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier in which messages will be unpinned */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
    ) {
    }

    /**
     * Get Identifier of the chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message thread identifier in which messages will be unpinned
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier in which messages will be unpinned
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'unpinAllMessageThreadMessages',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
        ];
    }
}
