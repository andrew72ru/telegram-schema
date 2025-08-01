<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a local file.
 */
class LocalFile implements \JsonSerializable
{
    public function __construct(
        /** Local path to the locally available file part; may be empty */
        #[SerializedName('path')]
        private string $path,
        /** True, if it is possible to download or generate the file */
        #[SerializedName('can_be_downloaded')]
        private bool $canBeDownloaded,
        /** True, if the file can be deleted */
        #[SerializedName('can_be_deleted')]
        private bool $canBeDeleted,
        /** True, if the file is currently being downloaded (or a local copy is being generated by some other means) */
        #[SerializedName('is_downloading_active')]
        private bool $isDownloadingActive,
        /** True, if the local copy is fully available */
        #[SerializedName('is_downloading_completed')]
        private bool $isDownloadingCompleted,
        /** Download will be started from this offset. downloaded_prefix_size is calculated from this offset */
        #[SerializedName('download_offset')]
        private int $downloadOffset,
        /** If is_downloading_completed is false, then only some prefix of the file starting from download_offset is ready to be read. downloaded_prefix_size is the size of that prefix in bytes */
        #[SerializedName('downloaded_prefix_size')]
        private int $downloadedPrefixSize,
        /** Total downloaded file size, in bytes. Can be used only for calculating download progress. The actual file size may be bigger, and some parts of it may contain garbage */
        #[SerializedName('downloaded_size')]
        private int $downloadedSize,
    ) {
    }

    /**
     * Get Local path to the locally available file part; may be empty.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set Local path to the locally available file part; may be empty.
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get True, if it is possible to download or generate the file.
     */
    public function getCanBeDownloaded(): bool
    {
        return $this->canBeDownloaded;
    }

    /**
     * Set True, if it is possible to download or generate the file.
     */
    public function setCanBeDownloaded(bool $canBeDownloaded): self
    {
        $this->canBeDownloaded = $canBeDownloaded;

        return $this;
    }

    /**
     * Get True, if the file can be deleted.
     */
    public function getCanBeDeleted(): bool
    {
        return $this->canBeDeleted;
    }

    /**
     * Set True, if the file can be deleted.
     */
    public function setCanBeDeleted(bool $canBeDeleted): self
    {
        $this->canBeDeleted = $canBeDeleted;

        return $this;
    }

    /**
     * Get True, if the file is currently being downloaded (or a local copy is being generated by some other means).
     */
    public function getIsDownloadingActive(): bool
    {
        return $this->isDownloadingActive;
    }

    /**
     * Set True, if the file is currently being downloaded (or a local copy is being generated by some other means).
     */
    public function setIsDownloadingActive(bool $isDownloadingActive): self
    {
        $this->isDownloadingActive = $isDownloadingActive;

        return $this;
    }

    /**
     * Get True, if the local copy is fully available.
     */
    public function getIsDownloadingCompleted(): bool
    {
        return $this->isDownloadingCompleted;
    }

    /**
     * Set True, if the local copy is fully available.
     */
    public function setIsDownloadingCompleted(bool $isDownloadingCompleted): self
    {
        $this->isDownloadingCompleted = $isDownloadingCompleted;

        return $this;
    }

    /**
     * Get Download will be started from this offset. downloaded_prefix_size is calculated from this offset.
     */
    public function getDownloadOffset(): int
    {
        return $this->downloadOffset;
    }

    /**
     * Set Download will be started from this offset. downloaded_prefix_size is calculated from this offset.
     */
    public function setDownloadOffset(int $downloadOffset): self
    {
        $this->downloadOffset = $downloadOffset;

        return $this;
    }

    /**
     * Get If is_downloading_completed is false, then only some prefix of the file starting from download_offset is ready to be read. downloaded_prefix_size is the size of that prefix in bytes.
     */
    public function getDownloadedPrefixSize(): int
    {
        return $this->downloadedPrefixSize;
    }

    /**
     * Set If is_downloading_completed is false, then only some prefix of the file starting from download_offset is ready to be read. downloaded_prefix_size is the size of that prefix in bytes.
     */
    public function setDownloadedPrefixSize(int $downloadedPrefixSize): self
    {
        $this->downloadedPrefixSize = $downloadedPrefixSize;

        return $this;
    }

    /**
     * Get Total downloaded file size, in bytes. Can be used only for calculating download progress. The actual file size may be bigger, and some parts of it may contain garbage.
     */
    public function getDownloadedSize(): int
    {
        return $this->downloadedSize;
    }

    /**
     * Set Total downloaded file size, in bytes. Can be used only for calculating download progress. The actual file size may be bigger, and some parts of it may contain garbage.
     */
    public function setDownloadedSize(int $downloadedSize): self
    {
        $this->downloadedSize = $downloadedSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'localFile',
            'path' => $this->getPath(),
            'can_be_downloaded' => $this->getCanBeDownloaded(),
            'can_be_deleted' => $this->getCanBeDeleted(),
            'is_downloading_active' => $this->getIsDownloadingActive(),
            'is_downloading_completed' => $this->getIsDownloadingCompleted(),
            'download_offset' => $this->getDownloadOffset(),
            'downloaded_prefix_size' => $this->getDownloadedPrefixSize(),
            'downloaded_size' => $this->getDownloadedSize(),
        ];
    }
}
