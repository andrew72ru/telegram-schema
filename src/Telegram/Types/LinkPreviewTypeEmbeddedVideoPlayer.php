<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video player
 */
class LinkPreviewTypeEmbeddedVideoPlayer extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** URL of the external video player */
        #[SerializedName('url')]
        private string $url,
        /** Thumbnail of the video; may be null if unknown */
        #[SerializedName('thumbnail')]
        private Photo|null $thumbnail = null,
        /** Duration of the video, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Expected width of the embedded player */
        #[SerializedName('width')]
        private int $width,
        /** Expected height of the embedded player */
        #[SerializedName('height')]
        private int $height,
    ) {
    }

    /**
     * Get URL of the external video player
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the external video player
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Thumbnail of the video; may be null if unknown
     */
    public function getThumbnail(): Photo|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Thumbnail of the video; may be null if unknown
     */
    public function setThumbnail(Photo|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Duration of the video, in seconds
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Expected width of the embedded player
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Expected width of the embedded player
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Expected height of the embedded player
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Expected height of the embedded player
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeEmbeddedVideoPlayer',
            'url' => $this->getUrl(),
            'thumbnail' => $this->getThumbnail(),
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
        ];
    }
}
