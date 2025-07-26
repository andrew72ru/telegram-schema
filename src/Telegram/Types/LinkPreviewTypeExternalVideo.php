<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a video file
 */
class LinkPreviewTypeExternalVideo extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** URL of the video file */
        #[SerializedName('url')]
        private string $url,
        /** MIME type of the video file */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** Expected width of the video preview; 0 if unknown */
        #[SerializedName('width')]
        private int $width,
        /** Expected height of the video preview; 0 if unknown */
        #[SerializedName('height')]
        private int $height,
        /** Duration of the video, in seconds; 0 if unknown */
        #[SerializedName('duration')]
        private int $duration,
    ) {
    }

    /**
     * Get URL of the video file
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the video file
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get MIME type of the video file
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the video file
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get Expected width of the video preview; 0 if unknown
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Expected width of the video preview; 0 if unknown
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Expected height of the video preview; 0 if unknown
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Expected height of the video preview; 0 if unknown
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Duration of the video, in seconds; 0 if unknown
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds; 0 if unknown
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeExternalVideo',
            'url' => $this->getUrl(),
            'mime_type' => $this->getMimeType(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'duration' => $this->getDuration(),
        ];
    }
}
