<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes a file from the TDLib file cache @file_id Identifier of the file to delete.
 */
class DeleteFile extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteFile',
            'file_id' => $this->getFileId(),
        ];
    }
}
