<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes all unread reactions in the topic in a channel direct messages chat administered by the current user.
 */
class ReadAllDirectMessagesChatTopicReactions extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Topic identifier */
        #[SerializedName('topic_id')]
        private int $topicId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readAllDirectMessagesChatTopicReactions',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
        ];
    }
}
