<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An animation message (GIF-style).
 */
class InputMessageAnimation extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Animation file to be sent */
        #[SerializedName('animation')]
        private InputFile|null $animation = null,
        /** Animation thumbnail; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** File identifiers of the stickers added to the animation, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
        /** Duration of the animation, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Width of the animation; may be replaced by the server */
        #[SerializedName('width')]
        private int $width,
        /** Height of the animation; may be replaced by the server */
        #[SerializedName('height')]
        private int $height,
        /** Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation; not supported in secret chats */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** True, if the animation preview must be covered by a spoiler animation; not supported in secret chats */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
    ) {
    }

    /**
     * Get Animation file to be sent
     */
    public function getAnimation(): InputFile|null
    {
        return $this->animation;
    }

    /**
     * Set Animation file to be sent
     */
    public function setAnimation(InputFile|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Animation thumbnail; pass null to skip thumbnail uploading
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Animation thumbnail; pass null to skip thumbnail uploading
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File identifiers of the stickers added to the animation, if applicable
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the animation, if applicable
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

        return $this;
    }

    /**
     * Get Duration of the animation, in seconds
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the animation, in seconds
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Width of the animation; may be replaced by the server
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Width of the animation; may be replaced by the server
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Height of the animation; may be replaced by the server
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Height of the animation; may be replaced by the server
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Animation caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation; not supported in secret chats
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation; not supported in secret chats
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get True, if the animation preview must be covered by a spoiler animation; not supported in secret chats
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the animation preview must be covered by a spoiler animation; not supported in secret chats
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageAnimation',
            'animation' => $this->getAnimation(),
            'thumbnail' => $this->getThumbnail(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'has_spoiler' => $this->getHasSpoiler(),
        ];
    }
}
