<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a video file.
 */
class Video implements \JsonSerializable
{
    public function __construct(
        /** Duration of the video, in seconds; as defined by the sender */
        #[SerializedName('duration')]
        private int $duration,
        /** Video width; as defined by the sender */
        #[SerializedName('width')]
        private int $width,
        /** Video height; as defined by the sender */
        #[SerializedName('height')]
        private int $height,
        /** Original name of the file; as defined by the sender */
        #[SerializedName('file_name')]
        private string $fileName,
        /** MIME type of the file; as defined by the sender */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets */
        #[SerializedName('has_stickers')]
        private bool $hasStickers,
        /** True, if the video is expected to be streamed */
        #[SerializedName('supports_streaming')]
        private bool $supportsStreaming,
        /** Video minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** File containing the video */
        #[SerializedName('video')]
        private File|null $video = null,
    ) {
    }

    /**
     * Get Duration of the video, in seconds; as defined by the sender.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds; as defined by the sender.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Video width; as defined by the sender.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Video width; as defined by the sender.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Video height; as defined by the sender.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Video height; as defined by the sender.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Original name of the file; as defined by the sender.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Set Original name of the file; as defined by the sender.
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get MIME type of the file; as defined by the sender.
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the file; as defined by the sender.
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
     */
    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    /**
     * Set True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
     */
    public function setHasStickers(bool $hasStickers): self
    {
        $this->hasStickers = $hasStickers;

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
     * Get Video minithumbnail; may be null.
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Video minithumbnail; may be null.
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null.
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null.
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File containing the video.
     */
    public function getVideo(): File|null
    {
        return $this->video;
    }

    /**
     * Set File containing the video.
     */
    public function setVideo(File|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'video',
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'file_name' => $this->getFileName(),
            'mime_type' => $this->getMimeType(),
            'has_stickers' => $this->getHasStickers(),
            'supports_streaming' => $this->getSupportsStreaming(),
            'minithumbnail' => $this->getMinithumbnail(),
            'thumbnail' => $this->getThumbnail(),
            'video' => $this->getVideo(),
        ];
    }
}
