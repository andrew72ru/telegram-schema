<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains autosave settings for an autosave settings scope.
 */
class ScopeAutosaveSettings implements \JsonSerializable
{
    public function __construct(
        /** True, if photo autosave is enabled */
        #[SerializedName('autosave_photos')]
        private bool $autosavePhotos,
        /** True, if video autosave is enabled */
        #[SerializedName('autosave_videos')]
        private bool $autosaveVideos,
        /** The maximum size of a video file to be autosaved, in bytes; 512 KB - 4000 MB */
        #[SerializedName('max_video_file_size')]
        private int $maxVideoFileSize,
    ) {
    }

    /**
     * Get True, if photo autosave is enabled.
     */
    public function getAutosavePhotos(): bool
    {
        return $this->autosavePhotos;
    }

    /**
     * Set True, if photo autosave is enabled.
     */
    public function setAutosavePhotos(bool $autosavePhotos): self
    {
        $this->autosavePhotos = $autosavePhotos;

        return $this;
    }

    /**
     * Get True, if video autosave is enabled.
     */
    public function getAutosaveVideos(): bool
    {
        return $this->autosaveVideos;
    }

    /**
     * Set True, if video autosave is enabled.
     */
    public function setAutosaveVideos(bool $autosaveVideos): self
    {
        $this->autosaveVideos = $autosaveVideos;

        return $this;
    }

    /**
     * Get The maximum size of a video file to be autosaved, in bytes; 512 KB - 4000 MB.
     */
    public function getMaxVideoFileSize(): int
    {
        return $this->maxVideoFileSize;
    }

    /**
     * Set The maximum size of a video file to be autosaved, in bytes; 512 KB - 4000 MB.
     */
    public function setMaxVideoFileSize(int $maxVideoFileSize): self
    {
        $this->maxVideoFileSize = $maxVideoFileSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'scopeAutosaveSettings',
            'autosave_photos' => $this->getAutosavePhotos(),
            'autosave_videos' => $this->getAutosaveVideos(),
            'max_video_file_size' => $this->getMaxVideoFileSize(),
        ];
    }
}
