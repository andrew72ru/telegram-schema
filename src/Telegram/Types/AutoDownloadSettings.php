<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains auto-download settings.
 */
class AutoDownloadSettings implements \JsonSerializable
{
    public function __construct(
        /** True, if the auto-download is enabled */
        #[SerializedName('is_auto_download_enabled')]
        private bool $isAutoDownloadEnabled,
        /** The maximum size of a photo file to be auto-downloaded, in bytes */
        #[SerializedName('max_photo_file_size')]
        private int $maxPhotoFileSize,
        /** The maximum size of a video file to be auto-downloaded, in bytes */
        #[SerializedName('max_video_file_size')]
        private int $maxVideoFileSize,
        /** The maximum size of other file types to be auto-downloaded, in bytes */
        #[SerializedName('max_other_file_size')]
        private int $maxOtherFileSize,
        /** The maximum suggested bitrate for uploaded videos, in kbit/s */
        #[SerializedName('video_upload_bitrate')]
        private int $videoUploadBitrate,
        /** True, if the beginning of video files needs to be preloaded for instant playback */
        #[SerializedName('preload_large_videos')]
        private bool $preloadLargeVideos,
        /** True, if the next audio track needs to be preloaded while the user is listening to an audio file */
        #[SerializedName('preload_next_audio')]
        private bool $preloadNextAudio,
        /** True, if stories needs to be preloaded */
        #[SerializedName('preload_stories')]
        private bool $preloadStories,
        /** True, if "use less data for calls" option needs to be enabled */
        #[SerializedName('use_less_data_for_calls')]
        private bool $useLessDataForCalls,
    ) {
    }

    /**
     * Get True, if the auto-download is enabled.
     */
    public function getIsAutoDownloadEnabled(): bool
    {
        return $this->isAutoDownloadEnabled;
    }

    /**
     * Set True, if the auto-download is enabled.
     */
    public function setIsAutoDownloadEnabled(bool $isAutoDownloadEnabled): self
    {
        $this->isAutoDownloadEnabled = $isAutoDownloadEnabled;

        return $this;
    }

    /**
     * Get The maximum size of a photo file to be auto-downloaded, in bytes.
     */
    public function getMaxPhotoFileSize(): int
    {
        return $this->maxPhotoFileSize;
    }

    /**
     * Set The maximum size of a photo file to be auto-downloaded, in bytes.
     */
    public function setMaxPhotoFileSize(int $maxPhotoFileSize): self
    {
        $this->maxPhotoFileSize = $maxPhotoFileSize;

        return $this;
    }

    /**
     * Get The maximum size of a video file to be auto-downloaded, in bytes.
     */
    public function getMaxVideoFileSize(): int
    {
        return $this->maxVideoFileSize;
    }

    /**
     * Set The maximum size of a video file to be auto-downloaded, in bytes.
     */
    public function setMaxVideoFileSize(int $maxVideoFileSize): self
    {
        $this->maxVideoFileSize = $maxVideoFileSize;

        return $this;
    }

    /**
     * Get The maximum size of other file types to be auto-downloaded, in bytes.
     */
    public function getMaxOtherFileSize(): int
    {
        return $this->maxOtherFileSize;
    }

    /**
     * Set The maximum size of other file types to be auto-downloaded, in bytes.
     */
    public function setMaxOtherFileSize(int $maxOtherFileSize): self
    {
        $this->maxOtherFileSize = $maxOtherFileSize;

        return $this;
    }

    /**
     * Get The maximum suggested bitrate for uploaded videos, in kbit/s.
     */
    public function getVideoUploadBitrate(): int
    {
        return $this->videoUploadBitrate;
    }

    /**
     * Set The maximum suggested bitrate for uploaded videos, in kbit/s.
     */
    public function setVideoUploadBitrate(int $videoUploadBitrate): self
    {
        $this->videoUploadBitrate = $videoUploadBitrate;

        return $this;
    }

    /**
     * Get True, if the beginning of video files needs to be preloaded for instant playback.
     */
    public function getPreloadLargeVideos(): bool
    {
        return $this->preloadLargeVideos;
    }

    /**
     * Set True, if the beginning of video files needs to be preloaded for instant playback.
     */
    public function setPreloadLargeVideos(bool $preloadLargeVideos): self
    {
        $this->preloadLargeVideos = $preloadLargeVideos;

        return $this;
    }

    /**
     * Get True, if the next audio track needs to be preloaded while the user is listening to an audio file.
     */
    public function getPreloadNextAudio(): bool
    {
        return $this->preloadNextAudio;
    }

    /**
     * Set True, if the next audio track needs to be preloaded while the user is listening to an audio file.
     */
    public function setPreloadNextAudio(bool $preloadNextAudio): self
    {
        $this->preloadNextAudio = $preloadNextAudio;

        return $this;
    }

    /**
     * Get True, if stories needs to be preloaded.
     */
    public function getPreloadStories(): bool
    {
        return $this->preloadStories;
    }

    /**
     * Set True, if stories needs to be preloaded.
     */
    public function setPreloadStories(bool $preloadStories): self
    {
        $this->preloadStories = $preloadStories;

        return $this;
    }

    /**
     * Get True, if "use less data for calls" option needs to be enabled.
     */
    public function getUseLessDataForCalls(): bool
    {
        return $this->useLessDataForCalls;
    }

    /**
     * Set True, if "use less data for calls" option needs to be enabled.
     */
    public function setUseLessDataForCalls(bool $useLessDataForCalls): self
    {
        $this->useLessDataForCalls = $useLessDataForCalls;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autoDownloadSettings',
            'is_auto_download_enabled' => $this->getIsAutoDownloadEnabled(),
            'max_photo_file_size' => $this->getMaxPhotoFileSize(),
            'max_video_file_size' => $this->getMaxVideoFileSize(),
            'max_other_file_size' => $this->getMaxOtherFileSize(),
            'video_upload_bitrate' => $this->getVideoUploadBitrate(),
            'preload_large_videos' => $this->getPreloadLargeVideos(),
            'preload_next_audio' => $this->getPreloadNextAudio(),
            'preload_stories' => $this->getPreloadStories(),
            'use_less_data_for_calls' => $this->getUseLessDataForCalls(),
        ];
    }
}
