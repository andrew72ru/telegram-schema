<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a thumbnail.
 */
class Thumbnail implements \JsonSerializable
{
    public function __construct(
        /** Thumbnail format */
        #[SerializedName('format')]
        private ThumbnailFormat|null $format = null,
        /** Thumbnail width */
        #[SerializedName('width')]
        private int $width,
        /** Thumbnail height */
        #[SerializedName('height')]
        private int $height,
        /** The thumbnail */
        #[SerializedName('file')]
        private File|null $file = null,
    ) {
    }

    /**
     * Get Thumbnail format.
     */
    public function getFormat(): ThumbnailFormat|null
    {
        return $this->format;
    }

    /**
     * Set Thumbnail format.
     */
    public function setFormat(ThumbnailFormat|null $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get Thumbnail width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Thumbnail width.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Thumbnail height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Thumbnail height.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get The thumbnail.
     */
    public function getFile(): File|null
    {
        return $this->file;
    }

    /**
     * Set The thumbnail.
     */
    public function setFile(File|null $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnail',
            'format' => $this->getFormat(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'file' => $this->getFile(),
        ];
    }
}
