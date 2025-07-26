<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains number of being downloaded and recently downloaded files found
 */
class DownloadedFileCounts implements \JsonSerializable
{
    public function __construct(
        /** Number of active file downloads found, including paused */
        #[SerializedName('active_count')]
        private int $activeCount,
        /** Number of paused file downloads found */
        #[SerializedName('paused_count')]
        private int $pausedCount,
        /** Number of completed file downloads found */
        #[SerializedName('completed_count')]
        private int $completedCount,
    ) {
    }

    /**
     * Get Number of active file downloads found, including paused
     */
    public function getActiveCount(): int
    {
        return $this->activeCount;
    }

    /**
     * Set Number of active file downloads found, including paused
     */
    public function setActiveCount(int $activeCount): self
    {
        $this->activeCount = $activeCount;

        return $this;
    }

    /**
     * Get Number of paused file downloads found
     */
    public function getPausedCount(): int
    {
        return $this->pausedCount;
    }

    /**
     * Set Number of paused file downloads found
     */
    public function setPausedCount(int $pausedCount): self
    {
        $this->pausedCount = $pausedCount;

        return $this;
    }

    /**
     * Get Number of completed file downloads found
     */
    public function getCompletedCount(): int
    {
        return $this->completedCount;
    }

    /**
     * Set Number of completed file downloads found
     */
    public function setCompletedCount(int $completedCount): self
    {
        $this->completedCount = $completedCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'downloadedFileCounts',
            'active_count' => $this->getActiveCount(),
            'paused_count' => $this->getPausedCount(),
            'completed_count' => $this->getCompletedCount(),
        ];
    }
}
