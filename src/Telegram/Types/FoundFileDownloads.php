<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of downloaded files, found by a search
 */
class FoundFileDownloads implements \JsonSerializable
{
    public function __construct(
        /** Total number of suitable files, ignoring offset */
        #[SerializedName('total_counts')]
        private DownloadedFileCounts|null $totalCounts = null,
        /** The list of files */
        #[SerializedName('files')]
        private array|null $files = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Total number of suitable files, ignoring offset
     */
    public function getTotalCounts(): DownloadedFileCounts|null
    {
        return $this->totalCounts;
    }

    /**
     * Set Total number of suitable files, ignoring offset
     */
    public function setTotalCounts(DownloadedFileCounts|null $totalCounts): self
    {
        $this->totalCounts = $totalCounts;

        return $this;
    }

    /**
     * Get The list of files
     */
    public function getFiles(): array|null
    {
        return $this->files;
    }

    /**
     * Set The list of files
     */
    public function setFiles(array|null $files): self
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundFileDownloads',
            'total_counts' => $this->getTotalCounts(),
            'files' => $this->getFiles(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
