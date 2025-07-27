<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for the specified query in the title and username of already known chats via request to the server. Returns chats in the order seen in the main chat list @query Query to search for @limit The maximum number of chats to be returned.
 */
class SearchChatsOnServer extends Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('query')]
        private string $query,
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChatsOnServer',
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
