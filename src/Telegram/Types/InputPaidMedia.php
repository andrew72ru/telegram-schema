<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a paid media to be sent
 */
class InputPaidMedia implements \JsonSerializable
{
    public function __construct(
        /** Type of the media */
        #[SerializedName('type')]
        private InputPaidMediaType|null $type = null,
        /** Photo or video to be sent */
        #[SerializedName('media')]
        private InputFile|null $media = null,
        /** Media thumbnail; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** File identifiers of the stickers added to the media, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
        /** Media width */
        #[SerializedName('width')]
        private int $width,
        /** Media height */
        #[SerializedName('height')]
        private int $height,
    ) {
    }

    /**
     * Get Type of the media
     */
    public function getType(): InputPaidMediaType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the media
     */
    public function setType(InputPaidMediaType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Photo or video to be sent
     */
    public function getMedia(): InputFile|null
    {
        return $this->media;
    }

    /**
     * Set Photo or video to be sent
     */
    public function setMedia(InputFile|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get Media thumbnail; pass null to skip thumbnail uploading
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Media thumbnail; pass null to skip thumbnail uploading
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File identifiers of the stickers added to the media, if applicable
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the media, if applicable
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

        return $this;
    }

    /**
     * Get Media width
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Media width
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Media height
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Media height
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPaidMedia',
            'type' => $this->getType(),
            'media' => $this->getMedia(),
            'thumbnail' => $this->getThumbnail(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
        ];
    }
}
