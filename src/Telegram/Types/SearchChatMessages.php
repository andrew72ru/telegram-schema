<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for messages with given words in the chat. Returns the results in reverse chronological order, i.e. in order of decreasing message_id. Cannot be used in secret chats with a non-empty query
 */
class SearchChatMessages extends FoundChatMessages implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to search messages */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass topic identifier to search messages only in specific topic; pass null to search for messages in all topics */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Identifier of the message starting from which history must be fetched; use 0 to get results from the last message */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
        /** Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. */
        #[SerializedName('limit')]
        private int $limit,
        /** Additional filter for messages to search; pass null to search for all messages */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
    ) {
    }

    /**
     * Get Identifier of the chat in which to search messages
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to search messages
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass topic identifier to search messages only in specific topic; pass null to search for messages in all topics
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Pass topic identifier to search messages only in specific topic; pass null to search for messages in all topics
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Query to search for
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Identifier of the message starting from which history must be fetched; use 0 to get results from the last message
     */
    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    /**
     * Set Identifier of the message starting from which history must be fetched; use 0 to get results from the last message
     */
    public function setFromMessageId(int $fromMessageId): self
    {
        $this->fromMessageId = $fromMessageId;

        return $this;
    }

    /**
     * Get Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Additional filter for messages to search; pass null to search for all messages
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Additional filter for messages to search; pass null to search for all messages
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChatMessages',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'query' => $this->getQuery(),
            'sender_id' => $this->getSenderId(),
            'from_message_id' => $this->getFromMessageId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
            'filter' => $this->getFilter(),
        ];
    }
}
