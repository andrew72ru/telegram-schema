<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The state of the file download list has changed
 */
class UpdateFileDownloads extends Update implements \JsonSerializable
{
    public function __construct(
        /** Total size of files in the file download list, in bytes */
        #[SerializedName('total_size')]
        private int $totalSize,
        /** Total number of files in the file download list */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** Total downloaded size of files in the file download list, in bytes */
        #[SerializedName('downloaded_size')]
        private int $downloadedSize,
    ) {
    }

    /**
     * Get Total size of files in the file download list, in bytes
     */
    public function getTotalSize(): int
    {
        return $this->totalSize;
    }

    /**
     * Set Total size of files in the file download list, in bytes
     */
    public function setTotalSize(int $totalSize): self
    {
        $this->totalSize = $totalSize;

        return $this;
    }

    /**
     * Get Total number of files in the file download list
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Total number of files in the file download list
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get Total downloaded size of files in the file download list, in bytes
     */
    public function getDownloadedSize(): int
    {
        return $this->downloadedSize;
    }

    /**
     * Set Total downloaded size of files in the file download list, in bytes
     */
    public function setDownloadedSize(int $downloadedSize): self
    {
        $this->downloadedSize = $downloadedSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFileDownloads',
            'total_size' => $this->getTotalSize(),
            'total_count' => $this->getTotalCount(),
            'downloaded_size' => $this->getDownloadedSize(),
        ];
    }
}
