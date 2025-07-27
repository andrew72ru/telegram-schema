<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes all files from the file download list.
 */
class RemoveAllFilesFromDownloads extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Pass true to remove only active downloads, including paused */
        #[SerializedName('only_active')]
        private bool $onlyActive,
        /** Pass true to remove only completed downloads */
        #[SerializedName('only_completed')]
        private bool $onlyCompleted,
        /** Pass true to delete the file from the TDLib file cache */
        #[SerializedName('delete_from_cache')]
        private bool $deleteFromCache,
    ) {
    }

    /**
     * Get Pass true to remove only active downloads, including paused.
     */
    public function getOnlyActive(): bool
    {
        return $this->onlyActive;
    }

    /**
     * Set Pass true to remove only active downloads, including paused.
     */
    public function setOnlyActive(bool $onlyActive): self
    {
        $this->onlyActive = $onlyActive;

        return $this;
    }

    /**
     * Get Pass true to remove only completed downloads.
     */
    public function getOnlyCompleted(): bool
    {
        return $this->onlyCompleted;
    }

    /**
     * Set Pass true to remove only completed downloads.
     */
    public function setOnlyCompleted(bool $onlyCompleted): self
    {
        $this->onlyCompleted = $onlyCompleted;

        return $this;
    }

    /**
     * Get Pass true to delete the file from the TDLib file cache.
     */
    public function getDeleteFromCache(): bool
    {
        return $this->deleteFromCache;
    }

    /**
     * Set Pass true to delete the file from the TDLib file cache.
     */
    public function setDeleteFromCache(bool $deleteFromCache): self
    {
        $this->deleteFromCache = $deleteFromCache;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeAllFilesFromDownloads',
            'only_active' => $this->getOnlyActive(),
            'only_completed' => $this->getOnlyCompleted(),
            'delete_from_cache' => $this->getDeleteFromCache(),
        ];
    }
}
