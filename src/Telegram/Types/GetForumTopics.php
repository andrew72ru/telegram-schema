<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns found forum topics in a forum chat. This is a temporary method for getting information about topic list from the server
 */
class GetForumTopics extends ForumTopics implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the forum chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Query to search for in the forum topic's name */
        #[SerializedName('query')]
        private string $query,
        /** The date starting from which the results need to be fetched. Use 0 or any date in the future to get results from the last topic */
        #[SerializedName('offset_date')]
        private int $offsetDate,
        /** The message identifier of the last message in the last found topic, or 0 for the first request */
        #[SerializedName('offset_message_id')]
        private int $offsetMessageId,
        /** The message thread identifier of the last found topic, or 0 for the first request */
        #[SerializedName('offset_message_thread_id')]
        private int $offsetMessageThreadId,
        /** The maximum number of forum topics to be returned; up to 100. For optimal performance, the number of returned forum topics is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the forum chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the forum chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Query to search for in the forum topic's name
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for in the forum topic's name
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get The date starting from which the results need to be fetched. Use 0 or any date in the future to get results from the last topic
     */
    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    /**
     * Set The date starting from which the results need to be fetched. Use 0 or any date in the future to get results from the last topic
     */
    public function setOffsetDate(int $offsetDate): self
    {
        $this->offsetDate = $offsetDate;

        return $this;
    }

    /**
     * Get The message identifier of the last message in the last found topic, or 0 for the first request
     */
    public function getOffsetMessageId(): int
    {
        return $this->offsetMessageId;
    }

    /**
     * Set The message identifier of the last message in the last found topic, or 0 for the first request
     */
    public function setOffsetMessageId(int $offsetMessageId): self
    {
        $this->offsetMessageId = $offsetMessageId;

        return $this;
    }

    /**
     * Get The message thread identifier of the last found topic, or 0 for the first request
     */
    public function getOffsetMessageThreadId(): int
    {
        return $this->offsetMessageThreadId;
    }

    /**
     * Set The message thread identifier of the last found topic, or 0 for the first request
     */
    public function setOffsetMessageThreadId(int $offsetMessageThreadId): self
    {
        $this->offsetMessageThreadId = $offsetMessageThreadId;

        return $this;
    }

    /**
     * Get The maximum number of forum topics to be returned; up to 100. For optimal performance, the number of returned forum topics is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of forum topics to be returned; up to 100. For optimal performance, the number of returned forum topics is chosen by TDLib and can be smaller than the specified limit
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getForumTopics',
            'chat_id' => $this->getChatId(),
            'query' => $this->getQuery(),
            'offset_date' => $this->getOffsetDate(),
            'offset_message_id' => $this->getOffsetMessageId(),
            'offset_message_thread_id' => $this->getOffsetMessageThreadId(),
            'limit' => $this->getLimit(),
        ];
    }
}
