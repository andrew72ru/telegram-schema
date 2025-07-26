<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a video file posted as a story
 */
class StoryVideo implements \JsonSerializable
{
    public function __construct(
        /** Duration of the video, in seconds */
        #[SerializedName('duration')]
        private float $duration,
        /** Video width */
        #[SerializedName('width')]
        private int $width,
        /** Video height */
        #[SerializedName('height')]
        private int $height,
        /** True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets */
        #[SerializedName('has_stickers')]
        private bool $hasStickers,
        /** True, if the video has no sound */
        #[SerializedName('is_animation')]
        private bool $isAnimation,
        /** Video minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Video thumbnail in JPEG or MPEG4 format; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** Size of file prefix, which is expected to be preloaded, in bytes */
        #[SerializedName('preload_prefix_size')]
        private int $preloadPrefixSize,
        /** Timestamp of the frame used as video thumbnail */
        #[SerializedName('cover_frame_timestamp')]
        private float $coverFrameTimestamp,
        /** File containing the video */
        #[SerializedName('video')]
        private File|null $video = null,
    ) {
    }

    /**
     * Get Duration of the video, in seconds
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds
     */
    public function setDuration(float $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Video width
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Video width
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Video height
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Video height
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets
     */
    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    /**
     * Set True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets
     */
    public function setHasStickers(bool $hasStickers): self
    {
        $this->hasStickers = $hasStickers;

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

    /**
     * Get Video minithumbnail; may be null
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Video minithumbnail; may be null
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Video thumbnail in JPEG or MPEG4 format; may be null
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Video thumbnail in JPEG or MPEG4 format; may be null
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Size of file prefix, which is expected to be preloaded, in bytes
     */
    public function getPreloadPrefixSize(): int
    {
        return $this->preloadPrefixSize;
    }

    /**
     * Set Size of file prefix, which is expected to be preloaded, in bytes
     */
    public function setPreloadPrefixSize(int $preloadPrefixSize): self
    {
        $this->preloadPrefixSize = $preloadPrefixSize;

        return $this;
    }

    /**
     * Get Timestamp of the frame used as video thumbnail
     */
    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    /**
     * Set Timestamp of the frame used as video thumbnail
     */
    public function setCoverFrameTimestamp(float $coverFrameTimestamp): self
    {
        $this->coverFrameTimestamp = $coverFrameTimestamp;

        return $this;
    }

    /**
     * Get File containing the video
     */
    public function getVideo(): File|null
    {
        return $this->video;
    }

    /**
     * Set File containing the video
     */
    public function setVideo(File|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyVideo',
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'has_stickers' => $this->getHasStickers(),
            'is_animation' => $this->getIsAnimation(),
            'minithumbnail' => $this->getMinithumbnail(),
            'thumbnail' => $this->getThumbnail(),
            'preload_prefix_size' => $this->getPreloadPrefixSize(),
            'cover_frame_timestamp' => $this->getCoverFrameTimestamp(),
            'video' => $this->getVideo(),
        ];
    }
}
