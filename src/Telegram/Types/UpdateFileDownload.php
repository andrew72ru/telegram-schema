<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A file download was changed. This update is sent only after file download list is loaded for the first time
 */
class UpdateFileDownload extends Update implements \JsonSerializable
{
    public function __construct(
        /** File identifier */
        #[SerializedName('file_id')]
        private int $fileId,
        /** Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed */
        #[SerializedName('complete_date')]
        private int $completeDate,
        /** True, if downloading of the file is paused */
        #[SerializedName('is_paused')]
        private bool $isPaused,
        /** New number of being downloaded and recently downloaded files found */
        #[SerializedName('counts')]
        private DownloadedFileCounts|null $counts = null,
    ) {
    }

    /**
     * Get File identifier
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set File identifier
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed
     */
    public function getCompleteDate(): int
    {
        return $this->completeDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed
     */
    public function setCompleteDate(int $completeDate): self
    {
        $this->completeDate = $completeDate;

        return $this;
    }

    /**
     * Get True, if downloading of the file is paused
     */
    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    /**
     * Set True, if downloading of the file is paused
     */
    public function setIsPaused(bool $isPaused): self
    {
        $this->isPaused = $isPaused;

        return $this;
    }

    /**
     * Get New number of being downloaded and recently downloaded files found
     */
    public function getCounts(): DownloadedFileCounts|null
    {
        return $this->counts;
    }

    /**
     * Set New number of being downloaded and recently downloaded files found
     */
    public function setCounts(DownloadedFileCounts|null $counts): self
    {
        $this->counts = $counts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFileDownload',
            'file_id' => $this->getFileId(),
            'complete_date' => $this->getCompleteDate(),
            'is_paused' => $this->getIsPaused(),
            'counts' => $this->getCounts(),
        ];
    }
}
