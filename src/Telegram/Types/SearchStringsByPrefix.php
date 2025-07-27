<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches specified query by word prefixes in the provided strings. Returns 0-based positions of strings that matched. Can be called synchronously.
 */
class SearchStringsByPrefix extends FoundPositions implements \JsonSerializable
{
    public function __construct(
        /** The strings to search in for the query */
        #[SerializedName('strings')]
        private array|null $strings = null,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of objects to return */
        #[SerializedName('limit')]
        private int $limit,
        /** Pass true to receive no results for an empty query */
        #[SerializedName('return_none_for_empty_query')]
        private bool $returnNoneForEmptyQuery,
    ) {
    }

    /**
     * Get The strings to search in for the query.
     */
    public function getStrings(): array|null
    {
        return $this->strings;
    }

    /**
     * Set The strings to search in for the query.
     */
    public function setStrings(array|null $strings): self
    {
        $this->strings = $strings;

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
     * Get The maximum number of objects to return.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of objects to return.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Pass true to receive no results for an empty query.
     */
    public function getReturnNoneForEmptyQuery(): bool
    {
        return $this->returnNoneForEmptyQuery;
    }

    /**
     * Set Pass true to receive no results for an empty query.
     */
    public function setReturnNoneForEmptyQuery(bool $returnNoneForEmptyQuery): self
    {
        $this->returnNoneForEmptyQuery = $returnNoneForEmptyQuery;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchStringsByPrefix',
            'strings' => $this->getStrings(),
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
            'return_none_for_empty_query' => $this->getReturnNoneForEmptyQuery(),
        ];
    }
}
