<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for the specified query in the title and username of already known chats. This is an offline method. Returns chats in the order seen in the main chat list
 */
class SearchChats extends Chats implements \JsonSerializable
{
    public function __construct(
        /** Query to search for. If the query is empty, returns up to 50 recently found chats */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of chats to be returned */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Query to search for. If the query is empty, returns up to 50 recently found chats
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for. If the query is empty, returns up to 50 recently found chats
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get The maximum number of chats to be returned
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of chats to be returned
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChats',
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
