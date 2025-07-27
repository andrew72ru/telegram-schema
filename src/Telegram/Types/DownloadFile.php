<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Downloads a file from the cloud. Download progress and completion of the download will be notified through updateFile updates.
 */
class DownloadFile extends File implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the file to download */
        #[SerializedName('file_id')]
        private int $fileId,
        /** Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first */
        #[SerializedName('priority')]
        private int $priority,
        /** The starting position from which the file needs to be downloaded */
        #[SerializedName('offset')]
        private int $offset,
        /** Number of bytes which need to be downloaded starting from the "offset" position before the download will automatically be canceled; use 0 to download without a limit */
        #[SerializedName('limit')]
        private int $limit,
        /** Pass true to return response only after the file download has succeeded, has failed, has been canceled, or a new downloadFile request with different offset/limit parameters was sent; pass false to return file state immediately, just after the download has been started */
        #[SerializedName('synchronous')]
        private bool $synchronous,
    ) {
    }

    /**
     * Get Identifier of the file to download.
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set Identifier of the file to download.
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first.
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Set Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first.
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get The starting position from which the file needs to be downloaded.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set The starting position from which the file needs to be downloaded.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get Number of bytes which need to be downloaded starting from the "offset" position before the download will automatically be canceled; use 0 to download without a limit.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set Number of bytes which need to be downloaded starting from the "offset" position before the download will automatically be canceled; use 0 to download without a limit.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Pass true to return response only after the file download has succeeded, has failed, has been canceled, or a new downloadFile request with different offset/limit parameters was sent; pass false to return file state immediately, just after the download has been started.
     */
    public function getSynchronous(): bool
    {
        return $this->synchronous;
    }

    /**
     * Set Pass true to return response only after the file download has succeeded, has failed, has been canceled, or a new downloadFile request with different offset/limit parameters was sent; pass false to return file state immediately, just after the download has been started.
     */
    public function setSynchronous(bool $synchronous): self
    {
        $this->synchronous = $synchronous;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'downloadFile',
            'file_id' => $this->getFileId(),
            'priority' => $this->getPriority(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
            'synchronous' => $this->getSynchronous(),
        ];
    }
}
