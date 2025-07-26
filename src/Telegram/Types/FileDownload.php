<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a file added to file download list
 */
class FileDownload implements \JsonSerializable
{
    public function __construct(
        /** File identifier */
        #[SerializedName('file_id')]
        private int $fileId,
        /** The message with the file */
        #[SerializedName('message')]
        private Message|null $message = null,
        /** Point in time (Unix timestamp) when the file was added to the download list */
        #[SerializedName('add_date')]
        private int $addDate,
        /** Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed */
        #[SerializedName('complete_date')]
        private int $completeDate,
        /** True, if downloading of the file is paused */
        #[SerializedName('is_paused')]
        private bool $isPaused,
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
     * Get The message with the file
     */
    public function getMessage(): Message|null
    {
        return $this->message;
    }

    /**
     * Set The message with the file
     */
    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the file was added to the download list
     */
    public function getAddDate(): int
    {
        return $this->addDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the file was added to the download list
     */
    public function setAddDate(int $addDate): self
    {
        $this->addDate = $addDate;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileDownload',
            'file_id' => $this->getFileId(),
            'message' => $this->getMessage(),
            'add_date' => $this->getAddDate(),
            'complete_date' => $this->getCompleteDate(),
            'is_paused' => $this->getIsPaused(),
        ];
    }
}
