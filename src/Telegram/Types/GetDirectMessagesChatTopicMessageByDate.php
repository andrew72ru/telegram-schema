<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the last message sent in the topic in a channel direct messages chat administered by the current user no later than the specified date
 */
class GetDirectMessagesChatTopicMessageByDate extends Message implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic which messages will be fetched */
        #[SerializedName('topic_id')]
        private int $topicId,
        /** Point in time (Unix timestamp) relative to which to search for messages */
        #[SerializedName('date')]
        private int $date,
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
     * Get Identifier of the topic which messages will be fetched
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic which messages will be fetched
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) relative to which to search for messages
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) relative to which to search for messages
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDirectMessagesChatTopicMessageByDate',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'date' => $this->getDate(),
        ];
    }
}
