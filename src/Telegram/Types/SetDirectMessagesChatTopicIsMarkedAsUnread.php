<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the marked as unread state of the topic in a channel direct messages chat administered by the current user.
 */
class SetDirectMessagesChatTopicIsMarkedAsUnread extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Topic identifier */
        #[SerializedName('topic_id')]
        private int $topicId,
        /** New value of is_marked_as_unread */
        #[SerializedName('is_marked_as_unread')]
        private bool $isMarkedAsUnread,
    ) {
    }

    /**
     * Get Chat identifier of the channel direct messages chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the channel direct messages chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Topic identifier.
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Topic identifier.
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get New value of is_marked_as_unread.
     */
    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    /**
     * Set New value of is_marked_as_unread.
     */
    public function setIsMarkedAsUnread(bool $isMarkedAsUnread): self
    {
        $this->isMarkedAsUnread = $isMarkedAsUnread;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDirectMessagesChatTopicIsMarkedAsUnread',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'is_marked_as_unread' => $this->getIsMarkedAsUnread(),
        ];
    }
}
