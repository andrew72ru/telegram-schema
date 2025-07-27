<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is a video.
 */
class InputPaidMediaTypeVideo extends InputPaidMediaType implements \JsonSerializable
{
    public function __construct(
        /** Cover of the video; pass null to skip cover uploading */
        #[SerializedName('cover')]
        private InputFile|null $cover = null,
        /** Timestamp from which the video playing must start, in seconds */
        #[SerializedName('start_timestamp')]
        private int $startTimestamp,
        /** Duration of the video, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** True, if the video is expected to be streamed */
        #[SerializedName('supports_streaming')]
        private bool $supportsStreaming,
    ) {
    }

    /**
     * Get Cover of the video; pass null to skip cover uploading.
     */
    public function getCover(): InputFile|null
    {
        return $this->cover;
    }

    /**
     * Set Cover of the video; pass null to skip cover uploading.
     */
    public function setCover(InputFile|null $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get Timestamp from which the video playing must start, in seconds.
     */
    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    /**
     * Set Timestamp from which the video playing must start, in seconds.
     */
    public function setStartTimestamp(int $startTimestamp): self
    {
        $this->startTimestamp = $startTimestamp;

        return $this;
    }

    /**
     * Get Duration of the video, in seconds.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get True, if the video is expected to be streamed.
     */
    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    /**
     * Set True, if the video is expected to be streamed.
     */
    public function setSupportsStreaming(bool $supportsStreaming): self
    {
        $this->supportsStreaming = $supportsStreaming;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPaidMediaTypeVideo',
            'cover' => $this->getCover(),
            'start_timestamp' => $this->getStartTimestamp(),
            'duration' => $this->getDuration(),
            'supports_streaming' => $this->getSupportsStreaming(),
        ];
    }
}
