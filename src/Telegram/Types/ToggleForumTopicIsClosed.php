<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a topic is closed in a forum supergroup chat; requires can_manage_topics right in the supergroup unless the user is creator of the topic.
 */
class ToggleForumTopicIsClosed extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier of the forum topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Pass true to close the topic; pass false to reopen it */
        #[SerializedName('is_closed')]
        private bool $isClosed,
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
     * Get Message thread identifier of the forum topic.
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier of the forum topic.
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Pass true to close the topic; pass false to reopen it.
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * Set Pass true to close the topic; pass false to reopen it.
     */
    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleForumTopicIsClosed',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'is_closed' => $this->getIsClosed(),
        ];
    }
}
