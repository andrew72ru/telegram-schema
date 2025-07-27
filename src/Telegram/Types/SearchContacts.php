<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for the specified query in the first names, last names and usernames of the known user contacts.
 */
class SearchContacts extends Users implements \JsonSerializable
{
    public function __construct(
        /** Query to search for; may be empty to return all contacts */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of users to be returned */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Query to search for; may be empty to return all contacts.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for; may be empty to return all contacts.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get The maximum number of users to be returned.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of users to be returned.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchContacts',
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
