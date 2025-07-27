<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A thumbnail to be sent along with a file; must be in JPEG or WEBP format for stickers, and less than 200 KB in size.
 */
class InputThumbnail implements \JsonSerializable
{
    public function __construct(
        /** Thumbnail file to send. Sending thumbnails by file_id is currently not supported */
        #[SerializedName('thumbnail')]
        private InputFile|null $thumbnail = null,
        /** Thumbnail width, usually shouldn't exceed 320. Use 0 if unknown */
        #[SerializedName('width')]
        private int $width,
        /** Thumbnail height, usually shouldn't exceed 320. Use 0 if unknown */
        #[SerializedName('height')]
        private int $height,
    ) {
    }

    /**
     * Get Thumbnail file to send. Sending thumbnails by file_id is currently not supported.
     */
    public function getThumbnail(): InputFile|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Thumbnail file to send. Sending thumbnails by file_id is currently not supported.
     */
    public function setThumbnail(InputFile|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Thumbnail width, usually shouldn't exceed 320. Use 0 if unknown.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Thumbnail width, usually shouldn't exceed 320. Use 0 if unknown.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Thumbnail height, usually shouldn't exceed 320. Use 0 if unknown.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Thumbnail height, usually shouldn't exceed 320. Use 0 if unknown.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputThumbnail',
            'thumbnail' => $this->getThumbnail(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
        ];
    }
}
