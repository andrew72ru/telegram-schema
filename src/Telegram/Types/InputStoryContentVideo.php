<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video story
 */
class InputStoryContentVideo extends InputStoryContent implements \JsonSerializable
{
    public function __construct(
        /** Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with H.265 codec and key frames added each second */
        #[SerializedName('video')]
        private InputFile|null $video = null,
        /** File identifiers of the stickers added to the video, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
        /** Precise duration of the video, in seconds; 0-60 */
        #[SerializedName('duration')]
        private float $duration,
        /** Timestamp of the frame, which will be used as video thumbnail */
        #[SerializedName('cover_frame_timestamp')]
        private float $coverFrameTimestamp,
        /** True, if the video has no sound */
        #[SerializedName('is_animation')]
        private bool $isAnimation,
    ) {
    }

    /**
     * Get Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with H.265 codec and key frames added each second
     */
    public function getVideo(): InputFile|null
    {
        return $this->video;
    }

    /**
     * Set Video to be sent. The video size must be 720x1280. The video must be streamable and stored in MPEG4 format, after encoding with H.265 codec and key frames added each second
     */
    public function setVideo(InputFile|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get File identifiers of the stickers added to the video, if applicable
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the video, if applicable
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

        return $this;
    }

    /**
     * Get Precise duration of the video, in seconds; 0-60
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * Set Precise duration of the video, in seconds; 0-60
     */
    public function setDuration(float $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Timestamp of the frame, which will be used as video thumbnail
     */
    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    /**
     * Set Timestamp of the frame, which will be used as video thumbnail
     */
    public function setCoverFrameTimestamp(float $coverFrameTimestamp): self
    {
        $this->coverFrameTimestamp = $coverFrameTimestamp;

        return $this;
    }

    /**
     * Get True, if the video has no sound
     */
    public function getIsAnimation(): bool
    {
        return $this->isAnimation;
    }

    /**
     * Set True, if the video has no sound
     */
    public function setIsAnimation(bool $isAnimation): self
    {
        $this->isAnimation = $isAnimation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryContentVideo',
            'video' => $this->getVideo(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
            'duration' => $this->getDuration(),
            'cover_frame_timestamp' => $this->getCoverFrameTimestamp(),
            'is_animation' => $this->getIsAnimation(),
        ];
    }
}
