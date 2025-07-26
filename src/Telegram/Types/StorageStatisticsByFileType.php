<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the storage usage statistics for a specific file type
 */
class StorageStatisticsByFileType implements \JsonSerializable
{
    public function __construct(
        /** File type */
        #[SerializedName('file_type')]
        private FileType|null $fileType = null,
        /** Total size of the files, in bytes */
        #[SerializedName('size')]
        private int $size,
        /** Total number of files */
        #[SerializedName('count')]
        private int $count,
    ) {
    }

    /**
     * Get File type
     */
    public function getFileType(): FileType|null
    {
        return $this->fileType;
    }

    /**
     * Set File type
     */
    public function setFileType(FileType|null $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get Total size of the files, in bytes
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set Total size of the files, in bytes
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Total number of files
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Total number of files
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storageStatisticsByFileType',
            'file_type' => $this->getFileType(),
            'size' => $this->getSize(),
            'count' => $this->getCount(),
        ];
    }
}
