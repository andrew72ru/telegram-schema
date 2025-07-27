<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video.
 */
class LinkPreviewTypeVideo extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** The video description */
        #[SerializedName('video')]
        private Video|null $video = null,
        /** Cover of the video; may be null if none */
        #[SerializedName('cover')]
        private Photo|null $cover = null,
        /** Timestamp from which the video playing must start, in seconds */
        #[SerializedName('start_timestamp')]
        private int $startTimestamp,
    ) {
    }

    /**
     * Get The video description.
     */
    public function getVideo(): Video|null
    {
        return $this->video;
    }

    /**
     * Set The video description.
     */
    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Cover of the video; may be null if none.
     */
    public function getCover(): Photo|null
    {
        return $this->cover;
    }

    /**
     * Set Cover of the video; may be null if none.
     */
    public function setCover(Photo|null $cover): self
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeVideo',
            'video' => $this->getVideo(),
            'cover' => $this->getCover(),
            'start_timestamp' => $this->getStartTimestamp(),
        ];
    }
}
