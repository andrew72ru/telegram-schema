<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video message.
 */
class InputMessageVideo extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Video to be sent. The video is expected to be re-encoded to MPEG4 format with H.264 codec by the sender */
        #[SerializedName('video')]
        private InputFile|null $video = null,
        /** Video thumbnail; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** Cover of the video; pass null to skip cover uploading; not supported in secret chats and for self-destructing messages */
        #[SerializedName('cover')]
        private InputFile|null $cover = null,
        /** Timestamp from which the video playing must start, in seconds */
        #[SerializedName('start_timestamp')]
        private int $startTimestamp,
        /** File identifiers of the stickers added to the video, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
        /** Duration of the video, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Video width */
        #[SerializedName('width')]
        private int $width,
        /** Video height */
        #[SerializedName('height')]
        private int $height,
        /** True, if the video is expected to be streamed */
        #[SerializedName('supports_streaming')]
        private bool $supportsStreaming,
        /** Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the video; otherwise, the caption must be shown below the video; not supported in secret chats */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** Video self-destruct type; pass null if none; private chats only */
        #[SerializedName('self_destruct_type')]
        private MessageSelfDestructType|null $selfDestructType = null,
        /** True, if the video preview must be covered by a spoiler animation; not supported in secret chats */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
    ) {
    }

    /**
     * Get Video to be sent. The video is expected to be re-encoded to MPEG4 format with H.264 codec by the sender.
     */
    public function getVideo(): InputFile|null
    {
        return $this->video;
    }

    /**
     * Set Video to be sent. The video is expected to be re-encoded to MPEG4 format with H.264 codec by the sender.
     */
    public function setVideo(InputFile|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Video thumbnail; pass null to skip thumbnail uploading.
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Video thumbnail; pass null to skip thumbnail uploading.
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Cover of the video; pass null to skip cover uploading; not supported in secret chats and for self-destructing messages.
     */
    public function getCover(): InputFile|null
    {
        return $this->cover;
    }

    /**
     * Set Cover of the video; pass null to skip cover uploading; not supported in secret chats and for self-destructing messages.
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
     * Get File identifiers of the stickers added to the video, if applicable.
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the video, if applicable.
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

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
     * Get Video width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Video width.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Video height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Video height.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

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

    /**
     * Get Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the video; otherwise, the caption must be shown below the video; not supported in secret chats.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the video; otherwise, the caption must be shown below the video; not supported in secret chats.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get Video self-destruct type; pass null if none; private chats only.
     */
    public function getSelfDestructType(): MessageSelfDestructType|null
    {
        return $this->selfDestructType;
    }

    /**
     * Set Video self-destruct type; pass null if none; private chats only.
     */
    public function setSelfDestructType(MessageSelfDestructType|null $selfDestructType): self
    {
        $this->selfDestructType = $selfDestructType;

        return $this;
    }

    /**
     * Get True, if the video preview must be covered by a spoiler animation; not supported in secret chats.
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the video preview must be covered by a spoiler animation; not supported in secret chats.
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageVideo',
            'video' => $this->getVideo(),
            'thumbnail' => $this->getThumbnail(),
            'cover' => $this->getCover(),
            'start_timestamp' => $this->getStartTimestamp(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'supports_streaming' => $this->getSupportsStreaming(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'self_destruct_type' => $this->getSelfDestructType(),
            'has_spoiler' => $this->getHasSpoiler(),
        ];
    }
}
