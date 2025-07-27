<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns messages in the topic in a channel direct messages chat administered by the current user. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id).
 */
class GetDirectMessagesChatTopicHistory extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the channel direct messages chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the topic which messages will be fetched */
        #[SerializedName('topic_id')]
        private int $topicId,
        /** Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
        /** Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset. */
        #[SerializedName('limit')]
        private int $limit,
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
     * Get Identifier of the topic which messages will be fetched.
     */
    public function getTopicId(): int
    {
        return $this->topicId;
    }

    /**
     * Set Identifier of the topic which messages will be fetched.
     */
    public function setTopicId(int $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message.
     */
    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    /**
     * Set Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message.
     */
    public function setFromMessageId(int $fromMessageId): self
    {
        $this->fromMessageId = $fromMessageId;

        return $this;
    }

    /**
     * Get Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset..
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset..
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDirectMessagesChatTopicHistory',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'from_message_id' => $this->getFromMessageId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
