<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for messages in secret chats. Returns the results in reverse chronological order. For optimal performance, the number of returned messages is chosen by TDLib
 */
class SearchSecretMessages extends FoundMessages implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to search. Specify 0 to search in all secret chats */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Query to search for. If empty, searchChatMessages must be used instead */
        #[SerializedName('query')]
        private string $query,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
        /** Additional filter for messages to search; pass null to search for all messages */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
    ) {
    }

    /**
     * Get Identifier of the chat in which to search. Specify 0 to search in all secret chats
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to search. Specify 0 to search in all secret chats
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Query to search for. If empty, searchChatMessages must be used instead
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for. If empty, searchChatMessages must be used instead
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
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
            '@type' => 'searchSecretMessages',
            'chat_id' => $this->getChatId(),
            'query' => $this->getQuery(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
            'filter' => $this->getFilter(),
        ];
    }
}
