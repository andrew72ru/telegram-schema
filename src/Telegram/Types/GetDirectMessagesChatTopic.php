<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the topic in a channel direct messages chat administered by the current user
 */
class GetDirectMessagesChatTopic extends DirectMessagesChatTopic implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic to get */
        #[SerializedName('topic_id')]
        private int $topicId,
    ) {
    }

    /**
     * Get Chat identifier of the channel direct messages chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the channel direct messages chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the topic to get
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic to get
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDirectMessagesChatTopic',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
        ];
    }
}
