<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for files in the file download list or recently downloaded files from the list
 */
class SearchFileDownloads extends FoundFileDownloads implements \JsonSerializable
{
    public function __construct(
        /** Query to search for; may be empty to return all downloaded files */
        #[SerializedName('query')]
        private string $query,
        /** Pass true to search only for active downloads, including paused */
        #[SerializedName('only_active')]
        private bool $onlyActive,
        /** Pass true to search only for completed downloads */
        #[SerializedName('only_completed')]
        private bool $onlyCompleted,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of files to be returned */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Query to search for; may be empty to return all downloaded files
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for; may be empty to return all downloaded files
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Pass true to search only for active downloads, including paused
     */
    public function getOnlyActive(): bool
    {
        return $this->onlyActive;
    }

    /**
     * Set Pass true to search only for active downloads, including paused
     */
    public function setOnlyActive(bool $onlyActive): self
    {
        $this->onlyActive = $onlyActive;

        return $this;
    }

    /**
     * Get Pass true to search only for completed downloads
     */
    public function getOnlyCompleted(): bool
    {
        return $this->onlyCompleted;
    }

    /**
     * Set Pass true to search only for completed downloads
     */
    public function setOnlyCompleted(bool $onlyCompleted): self
    {
        $this->onlyCompleted = $onlyCompleted;

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
     * Get The maximum number of files to be returned
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of files to be returned
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchFileDownloads',
            'query' => $this->getQuery(),
            'only_active' => $this->getOnlyActive(),
            'only_completed' => $this->getOnlyCompleted(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
