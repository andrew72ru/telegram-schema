<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A file was added to the file download list. This update is sent only after file download list is loaded for the first time @file_download The added file download @counts New number of being downloaded and recently downloaded files found.
 */
class UpdateFileAddedToDownloads extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_download')]
        private FileDownload|null $fileDownload = null,
        #[SerializedName('counts')]
        private DownloadedFileCounts|null $counts = null,
    ) {
    }

    public function getFileDownload(): FileDownload|null
    {
        return $this->fileDownload;
    }

    public function setFileDownload(FileDownload|null $fileDownload): self
    {
        $this->fileDownload = $fileDownload;

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
            '@type' => 'updateFileAddedToDownloads',
            'file_download' => $this->getFileDownload(),
            'counts' => $this->getCounts(),
        ];
    }
}
