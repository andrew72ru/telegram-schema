<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo message.
 */
class InputMessagePhoto extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20 */
        #[SerializedName('photo')]
        private InputFile|null $photo = null,
        /** Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** File identifiers of the stickers added to the photo, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
        /** Photo width */
        #[SerializedName('width')]
        private int $width,
        /** Photo height */
        #[SerializedName('height')]
        private int $height,
        /** Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** Photo self-destruct type; pass null if none; private chats only */
        #[SerializedName('self_destruct_type')]
        private MessageSelfDestructType|null $selfDestructType = null,
        /** True, if the photo preview must be covered by a spoiler animation; not supported in secret chats */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
    ) {
    }

    /**
     * Get Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
     */
    public function getPhoto(): InputFile|null
    {
        return $this->photo;
    }

    /**
     * Set Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
     */
    public function setPhoto(InputFile|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats.
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats.
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File identifiers of the stickers added to the photo, if applicable.
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the photo, if applicable.
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

        return $this;
    }

    /**
     * Get Photo width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Photo width.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Photo height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Photo height.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get Photo self-destruct type; pass null if none; private chats only.
     */
    public function getSelfDestructType(): MessageSelfDestructType|null
    {
        return $this->selfDestructType;
    }

    /**
     * Set Photo self-destruct type; pass null if none; private chats only.
     */
    public function setSelfDestructType(MessageSelfDestructType|null $selfDestructType): self
    {
        $this->selfDestructType = $selfDestructType;

        return $this;
    }

    /**
     * Get True, if the photo preview must be covered by a spoiler animation; not supported in secret chats.
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the photo preview must be covered by a spoiler animation; not supported in secret chats.
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessagePhoto',
            'photo' => $this->getPhoto(),
            'thumbnail' => $this->getThumbnail(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'self_destruct_type' => $this->getSelfDestructType(),
            'has_spoiler' => $this->getHasSpoiler(),
        ];
    }
}
