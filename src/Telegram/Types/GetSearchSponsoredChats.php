<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns sponsored chats to be shown in the search results @query Query the user searches for
 */
class GetSearchSponsoredChats extends SponsoredChats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('query')]
        private string $query,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSearchSponsoredChats',
            'query' => $this->getQuery(),
        ];
    }
}
