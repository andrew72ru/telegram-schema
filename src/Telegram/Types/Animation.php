<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an animation file. The animation must be encoded in GIF or MPEG4 format
 */
class Animation implements \JsonSerializable
{
    public function __construct(
        /** Duration of the animation, in seconds; as defined by the sender */
        #[SerializedName('duration')]
        private int $duration,
        /** Width of the animation */
        #[SerializedName('width')]
        private int $width,
        /** Height of the animation */
        #[SerializedName('height')]
        private int $height,
        /** Original name of the file; as defined by the sender */
        #[SerializedName('file_name')]
        private string $fileName,
        /** MIME type of the file, usually "image/gif" or "video/mp4" */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** True, if stickers were added to the animation. The list of corresponding sticker set can be received using getAttachedStickerSets */
        #[SerializedName('has_stickers')]
        private bool $hasStickers,
        /** Animation minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Animation thumbnail in JPEG or MPEG4 format; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** File containing the animation */
        #[SerializedName('animation')]
        private File|null $animation = null,
    ) {
    }

    /**
     * Get Duration of the animation, in seconds; as defined by the sender
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the animation, in seconds; as defined by the sender
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Width of the animation
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Width of the animation
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Height of the animation
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Height of the animation
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Original name of the file; as defined by the sender
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Set Original name of the file; as defined by the sender
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get MIME type of the file, usually "image/gif" or "video/mp4"
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the file, usually "image/gif" or "video/mp4"
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get True, if stickers were added to the animation. The list of corresponding sticker set can be received using getAttachedStickerSets
     */
    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    /**
     * Set True, if stickers were added to the animation. The list of corresponding sticker set can be received using getAttachedStickerSets
     */
    public function setHasStickers(bool $hasStickers): self
    {
        $this->hasStickers = $hasStickers;

        return $this;
    }

    /**
     * Get Animation minithumbnail; may be null
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Animation minithumbnail; may be null
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Animation thumbnail in JPEG or MPEG4 format; may be null
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Animation thumbnail in JPEG or MPEG4 format; may be null
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File containing the animation
     */
    public function getAnimation(): File|null
    {
        return $this->animation;
    }

    /**
     * Set File containing the animation
     */
    public function setAnimation(File|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'animation',
            'duration' => $this->getDuration(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'file_name' => $this->getFileName(),
            'mime_type' => $this->getMimeType(),
            'has_stickers' => $this->getHasStickers(),
            'minithumbnail' => $this->getMinithumbnail(),
            'thumbnail' => $this->getThumbnail(),
            'animation' => $this->getAnimation(),
        ];
    }
}
