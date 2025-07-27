<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for messages tagged by the given reaction and with the given words in the Saved Messages chat; for Telegram Premium users only.
 */
class SearchSavedMessages extends FoundChatMessages implements \JsonSerializable
{
    public function __construct(
        /** If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
        /** Tag to search for; pass null to return all suitable messages */
        #[SerializedName('tag')]
        private ReactionType|null $tag = null,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
        /** Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages.
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages.
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    /**
     * Get Tag to search for; pass null to return all suitable messages.
     */
    public function getTag(): ReactionType|null
    {
        return $this->tag;
    }

    /**
     * Set Tag to search for; pass null to return all suitable messages.
     */
    public function setTag(ReactionType|null $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get Query to search for.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

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
     * Get Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset..
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset..
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchSavedMessages',
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
            'tag' => $this->getTag(),
            'query' => $this->getQuery(),
            'from_message_id' => $this->getFromMessageId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
