<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A file was removed from the file download list. This update is sent only after file download list is loaded for the first time @file_id File identifier @counts New number of being downloaded and recently downloaded files found.
 */
class UpdateFileRemovedFromDownloads extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
        #[SerializedName('counts')]
        private DownloadedFileCounts|null $counts = null,
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

    public function getCounts(): DownloadedFileCounts|null
    {
        return $this->counts;
    }

    public function setCounts(DownloadedFileCounts|null $counts): self
    {
        $this->counts = $counts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFileRemovedFromDownloads',
            'file_id' => $this->getFileId(),
            'counts' => $this->getCounts(),
        ];
    }
}
