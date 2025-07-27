<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for a specified query in the first name, last name and usernames of the members of a specified chat. Requires administrator rights if the chat is a channel.
 */
class SearchChatMembers extends ChatMembers implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of users to be returned; up to 200 */
        #[SerializedName('limit')]
        private int $limit,
        /** The type of users to search for; pass null to search among all chat members */
        #[SerializedName('filter')]
        private ChatMembersFilter|null $filter = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

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
     * Get The maximum number of users to be returned; up to 200.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of users to be returned; up to 200.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get The type of users to search for; pass null to search among all chat members.
     */
    public function getFilter(): ChatMembersFilter|null
    {
        return $this->filter;
    }

    /**
     * Set The type of users to search for; pass null to search among all chat members.
     */
    public function setFilter(ChatMembersFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChatMembers',
            'chat_id' => $this->getChatId(),
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
            'filter' => $this->getFilter(),
        ];
    }
}
