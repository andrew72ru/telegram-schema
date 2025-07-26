<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Number of messages in a topic has changed; for Saved Messages and channel direct messages chat topics only
 */
class UpdateTopicMessageCount extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in topic of which the number of messages has changed */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** Approximate number of messages in the topics */
        #[SerializedName('message_count')]
        private int $messageCount,
    ) {
    }

    /**
     * Get Identifier of the chat in topic of which the number of messages has changed
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in topic of which the number of messages has changed
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the topic
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Approximate number of messages in the topics
     */
    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    /**
     * Set Approximate number of messages in the topics
     */
    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateTopicMessageCount',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'message_count' => $this->getMessageCount(),
        ];
    }
}
