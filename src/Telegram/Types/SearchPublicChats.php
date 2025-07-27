<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches public chats by looking for specified query in their username and title. Currently, only private chats, supergroups and channels can be public. Returns a meaningful number of results.
 */
class SearchPublicChats extends Chats implements \JsonSerializable
{
    public function __construct(
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
    ) {
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchPublicChats',
            'query' => $this->getQuery(),
        ];
    }
}
