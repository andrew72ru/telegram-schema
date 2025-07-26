<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for the specified query in the title and username of up to 50 recently found chats. This is an offline method
 */
class SearchRecentlyFoundChats extends Chats implements \JsonSerializable
{
    public function __construct(
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of chats to be returned */
        #[SerializedName('limit')]
        private int $limit,
    ) {
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
            '@type' => 'searchRecentlyFoundChats',
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
