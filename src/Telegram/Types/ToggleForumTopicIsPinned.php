<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the pinned state of a forum topic; requires can_manage_topics right in the supergroup. There can be up to getOption("pinned_forum_topic_count_max") pinned forum topics
 */
class ToggleForumTopicIsPinned extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier of the forum topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Pass true to pin the topic; pass false to unpin it */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
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
     * Get Pass true to pin the topic; pass false to unpin it
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set Pass true to pin the topic; pass false to unpin it
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleForumTopicIsPinned',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
