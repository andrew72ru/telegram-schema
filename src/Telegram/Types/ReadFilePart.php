<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reads a part of a file from the TDLib file cache and returns read bytes. This method is intended to be used only if the application has no direct access to TDLib's file system, because it is usually slower than a direct read from the file.
 */
class ReadFilePart extends Data implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the file. The file must be located in the TDLib file cache */
        #[SerializedName('file_id')]
        private int $fileId,
        /** The offset from which to read the file */
        #[SerializedName('offset')]
        private int $offset,
        /** Number of bytes to read. An error will be returned if there are not enough bytes available in the file from the specified position. Pass 0 to read all available data from the specified position */
        #[SerializedName('count')]
        private int $count,
    ) {
    }

    /**
     * Get Identifier of the file. The file must be located in the TDLib file cache.
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set Identifier of the file. The file must be located in the TDLib file cache.
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get The offset from which to read the file.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set The offset from which to read the file.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get Number of bytes to read. An error will be returned if there are not enough bytes available in the file from the specified position. Pass 0 to read all available data from the specified position.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Number of bytes to read. An error will be returned if there are not enough bytes available in the file from the specified position. Pass 0 to read all available data from the specified position.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readFilePart',
            'file_id' => $this->getFileId(),
            'offset' => $this->getOffset(),
            'count' => $this->getCount(),
        ];
    }
}
