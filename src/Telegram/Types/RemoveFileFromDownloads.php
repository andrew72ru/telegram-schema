<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a file from the file download list @file_id Identifier of the downloaded file @delete_from_cache Pass true to delete the file from the TDLib file cache.
 */
class RemoveFileFromDownloads extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
        #[SerializedName('delete_from_cache')]
        private bool $deleteFromCache,
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

    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }

    public function setDeleteFromCache(bool $deleteFromCache): self
    {
        $this->deleteFromCache = $deleteFromCache;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeFileFromDownloads',
            'file_id' => $this->getFileId(),
            'delete_from_cache' => $this->getDeleteFromCache(),
        ];
    }
}
