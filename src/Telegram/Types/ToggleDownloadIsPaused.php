<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes pause state of a file in the file download list.
 */
class ToggleDownloadIsPaused extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the downloaded file */
        #[SerializedName('file_id')]
        private int $fileId,
        /** Pass true if the download is paused */
        #[SerializedName('is_paused')]
        private bool $isPaused,
    ) {
    }

    /**
     * Get Identifier of the downloaded file.
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set Identifier of the downloaded file.
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get Pass true if the download is paused.
     */
    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    /**
     * Set Pass true if the download is paused.
     */
    public function setIsPaused(bool $isPaused): self
    {
        $this->isPaused = $isPaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleDownloadIsPaused',
            'file_id' => $this->getFileId(),
            'is_paused' => $this->getIsPaused(),
        ];
    }
}
