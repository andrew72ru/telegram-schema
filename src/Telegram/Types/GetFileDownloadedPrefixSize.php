<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns file downloaded prefix size from a given offset, in bytes @file_id Identifier of the file @offset Offset from which downloaded prefix size needs to be calculated.
 */
class GetFileDownloadedPrefixSize extends FileDownloadedPrefixSize implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
        #[SerializedName('offset')]
        private int $offset,
    ) {
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getFileDownloadedPrefixSize',
            'file_id' => $this->getFileId(),
            'offset' => $this->getOffset(),
        ];
    }
}
