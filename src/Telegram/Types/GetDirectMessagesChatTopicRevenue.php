<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the total number of Telegram Stars received by the channel chat for direct messages from the given topic
 */
class GetDirectMessagesChatTopicRevenue extends StarCount implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat administered by the current user */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic */
        #[SerializedName('topic_id')]
        private int $topicId,
    ) {
    }

    /**
     * Get Chat identifier of the channel direct messages chat administered by the current user
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the channel direct messages chat administered by the current user
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the topic
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDirectMessagesChatTopicRevenue',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
        ];
    }
}
