<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for messages in all chats except secret chats. Returns the results in reverse chronological order (i.e., in order of decreasing (date, chat_id, message_id)).
 */
class SearchMessages extends FoundMessages implements \JsonSerializable
{
    public function __construct(
        /** Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
        /** Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
        /** Additional filter for type of the chat of the searched messages; pass null to search for messages in all chats */
        #[SerializedName('chat_type_filter')]
        private SearchMessagesChatTypeFilter|null $chatTypeFilter = null,
        /** If not 0, the minimum date of the messages to return */
        #[SerializedName('min_date')]
        private int $minDate,
        /** If not 0, the maximum date of the messages to return */
        #[SerializedName('max_date')]
        private int $maxDate,
    ) {
    }

    /**
     * Get Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported.
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set Chat list in which to search messages; pass null to search in all chats regardless of their chat list. Only Main and Archive chat lists are supported.
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

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
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function.
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Additional filter for messages to search; pass null to search for all messages. Filters searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterFailedToSend, and searchMessagesFilterPinned are unsupported in this function.
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get Additional filter for type of the chat of the searched messages; pass null to search for messages in all chats.
     */
    public function getChatTypeFilter(): SearchMessagesChatTypeFilter|null
    {
        return $this->chatTypeFilter;
    }

    /**
     * Set Additional filter for type of the chat of the searched messages; pass null to search for messages in all chats.
     */
    public function setChatTypeFilter(SearchMessagesChatTypeFilter|null $chatTypeFilter): self
    {
        $this->chatTypeFilter = $chatTypeFilter;

        return $this;
    }

    /**
     * Get If not 0, the minimum date of the messages to return.
     */
    public function getMinDate(): int
    {
        return $this->minDate;
    }

    /**
     * Set If not 0, the minimum date of the messages to return.
     */
    public function setMinDate(int $minDate): self
    {
        $this->minDate = $minDate;

        return $this;
    }

    /**
     * Get If not 0, the maximum date of the messages to return.
     */
    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    /**
     * Set If not 0, the maximum date of the messages to return.
     */
    public function setMaxDate(int $maxDate): self
    {
        $this->maxDate = $maxDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessages',
            'chat_list' => $this->getChatList(),
            'query' => $this->getQuery(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
            'filter' => $this->getFilter(),
            'chat_type_filter' => $this->getChatTypeFilter(),
            'min_date' => $this->getMinDate(),
            'max_date' => $this->getMaxDate(),
        ];
    }
}
