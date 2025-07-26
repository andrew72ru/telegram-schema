<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Starts recording of an active group call; for video chats only. Requires groupCall.can_be_managed right
 */
class StartGroupCallRecording extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Group call recording title; 0-64 characters */
        #[SerializedName('title')]
        private string $title,
        /** Pass true to record a video file instead of an audio file */
        #[SerializedName('record_video')]
        private bool $recordVideo,
        /** Pass true to use portrait orientation for video instead of landscape one */
        #[SerializedName('use_portrait_orientation')]
        private bool $usePortraitOrientation,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get Group call recording title; 0-64 characters
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Group call recording title; 0-64 characters
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Pass true to record a video file instead of an audio file
     */
    public function getRecordVideo(): bool
    {
        return $this->recordVideo;
    }

    /**
     * Set Pass true to record a video file instead of an audio file
     */
    public function setRecordVideo(bool $recordVideo): self
    {
        $this->recordVideo = $recordVideo;

        return $this;
    }

    /**
     * Get Pass true to use portrait orientation for video instead of landscape one
     */
    public function getUsePortraitOrientation(): bool
    {
        return $this->usePortraitOrientation;
    }

    /**
     * Set Pass true to use portrait orientation for video instead of landscape one
     */
    public function setUsePortraitOrientation(bool $usePortraitOrientation): self
    {
        $this->usePortraitOrientation = $usePortraitOrientation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'startGroupCallRecording',
            'group_call_id' => $this->getGroupCallId(),
            'title' => $this->getTitle(),
            'record_video' => $this->getRecordVideo(),
            'use_portrait_orientation' => $this->getUsePortraitOrientation(),
        ];
    }
}
