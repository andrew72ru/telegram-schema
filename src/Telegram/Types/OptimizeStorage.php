<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Optimizes storage usage, i.e. deletes some files and returns new storage usage statistics. Secret thumbnails can't be deleted.
 */
class OptimizeStorage extends StorageStatistics implements \JsonSerializable
{
    public function __construct(
        /** Limit on the total size of files after deletion, in bytes. Pass -1 to use the default limit */
        #[SerializedName('size')]
        private int $size,
        /** Limit on the time that has passed since the last time a file was accessed (or creation time for some filesystems). Pass -1 to use the default limit */
        #[SerializedName('ttl')]
        private int $ttl,
        /** Limit on the total number of files after deletion. Pass -1 to use the default limit */
        #[SerializedName('count')]
        private int $count,
        /** The amount of time after the creation of a file during which it can't be deleted, in seconds. Pass -1 to use the default value */
        #[SerializedName('immunity_delay')]
        private int $immunityDelay,
        /** If non-empty, only files with the given types are considered. By default, all types except thumbnails, profile photos, stickers and wallpapers are deleted */
        #[SerializedName('file_types')]
        private array|null $fileTypes = null,
        /** If non-empty, only files from the given chats are considered. Use 0 as chat identifier to delete files not belonging to any chat (e.g., profile photos) */
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
        /** If non-empty, files from the given chats are excluded. Use 0 as chat identifier to exclude all files not belonging to any chat (e.g., profile photos) */
        #[SerializedName('exclude_chat_ids')]
        private array|null $excludeChatIds = null,
        /** Pass true if statistics about the files that were deleted must be returned instead of the whole storage usage statistics. Affects only returned statistics */
        #[SerializedName('return_deleted_file_statistics')]
        private bool $returnDeletedFileStatistics,
        /** Same as in getStorageStatistics. Affects only returned statistics */
        #[SerializedName('chat_limit')]
        private int $chatLimit,
    ) {
    }

    /**
     * Get Limit on the total size of files after deletion, in bytes. Pass -1 to use the default limit.
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set Limit on the total size of files after deletion, in bytes. Pass -1 to use the default limit.
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Limit on the time that has passed since the last time a file was accessed (or creation time for some filesystems). Pass -1 to use the default limit.
     */
    public function getTtl(): int
    {
        return $this->ttl;
    }

    /**
     * Set Limit on the time that has passed since the last time a file was accessed (or creation time for some filesystems). Pass -1 to use the default limit.
     */
    public function setTtl(int $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    /**
     * Get Limit on the total number of files after deletion. Pass -1 to use the default limit.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Limit on the total number of files after deletion. Pass -1 to use the default limit.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get The amount of time after the creation of a file during which it can't be deleted, in seconds. Pass -1 to use the default value.
     */
    public function getImmunityDelay(): int
    {
        return $this->immunityDelay;
    }

    /**
     * Set The amount of time after the creation of a file during which it can't be deleted, in seconds. Pass -1 to use the default value.
     */
    public function setImmunityDelay(int $immunityDelay): self
    {
        $this->immunityDelay = $immunityDelay;

        return $this;
    }

    /**
     * Get If non-empty, only files with the given types are considered. By default, all types except thumbnails, profile photos, stickers and wallpapers are deleted.
     */
    public function getFileTypes(): array|null
    {
        return $this->fileTypes;
    }

    /**
     * Set If non-empty, only files with the given types are considered. By default, all types except thumbnails, profile photos, stickers and wallpapers are deleted.
     */
    public function setFileTypes(array|null $fileTypes): self
    {
        $this->fileTypes = $fileTypes;

        return $this;
    }

    /**
     * Get If non-empty, only files from the given chats are considered. Use 0 as chat identifier to delete files not belonging to any chat (e.g., profile photos).
     */
    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    /**
     * Set If non-empty, only files from the given chats are considered. Use 0 as chat identifier to delete files not belonging to any chat (e.g., profile photos).
     */
    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    /**
     * Get If non-empty, files from the given chats are excluded. Use 0 as chat identifier to exclude all files not belonging to any chat (e.g., profile photos).
     */
    public function getExcludeChatIds(): array|null
    {
        return $this->excludeChatIds;
    }

    /**
     * Set If non-empty, files from the given chats are excluded. Use 0 as chat identifier to exclude all files not belonging to any chat (e.g., profile photos).
     */
    public function setExcludeChatIds(array|null $excludeChatIds): self
    {
        $this->excludeChatIds = $excludeChatIds;

        return $this;
    }

    /**
     * Get Pass true if statistics about the files that were deleted must be returned instead of the whole storage usage statistics. Affects only returned statistics.
     */
    public function getReturnDeletedFileStatistics(): bool
    {
        return $this->returnDeletedFileStatistics;
    }

    /**
     * Set Pass true if statistics about the files that were deleted must be returned instead of the whole storage usage statistics. Affects only returned statistics.
     */
    public function setReturnDeletedFileStatistics(bool $returnDeletedFileStatistics): self
    {
        $this->returnDeletedFileStatistics = $returnDeletedFileStatistics;

        return $this;
    }

    /**
     * Get Same as in getStorageStatistics. Affects only returned statistics.
     */
    public function getChatLimit(): int
    {
        return $this->chatLimit;
    }

    /**
     * Set Same as in getStorageStatistics. Affects only returned statistics.
     */
    public function setChatLimit(int $chatLimit): self
    {
        $this->chatLimit = $chatLimit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'optimizeStorage',
            'size' => $this->getSize(),
            'ttl' => $this->getTtl(),
            'count' => $this->getCount(),
            'immunity_delay' => $this->getImmunityDelay(),
            'file_types' => $this->getFileTypes(),
            'chat_ids' => $this->getChatIds(),
            'exclude_chat_ids' => $this->getExcludeChatIds(),
            'return_deleted_file_statistics' => $this->getReturnDeletedFileStatistics(),
            'chat_limit' => $this->getChatLimit(),
        ];
    }
}
