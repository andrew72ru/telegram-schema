<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a sticker.
 */
class Sticker implements \JsonSerializable
{
    public function __construct(
        /** Unique sticker identifier within the set; 0 if none */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the sticker set to which the sticker belongs; 0 if none */
        #[SerializedName('set_id')]
        private int $setId,
        /** Sticker width; as defined by the sender */
        #[SerializedName('width')]
        private int $width,
        /** Sticker height; as defined by the sender */
        #[SerializedName('height')]
        private int $height,
        /** Emoji corresponding to the sticker */
        #[SerializedName('emoji')]
        private string $emoji,
        /** Sticker format */
        #[SerializedName('format')]
        private StickerFormat|null $format = null,
        /** Sticker's full type */
        #[SerializedName('full_type')]
        private StickerFullType|null $fullType = null,
        /** Sticker thumbnail in WEBP or JPEG format; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** File containing the sticker */
        #[SerializedName('sticker')]
        private File|null $sticker = null,
    ) {
    }

    /**
     * Get Unique sticker identifier within the set; 0 if none.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique sticker identifier within the set; 0 if none.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the sticker set to which the sticker belongs; 0 if none.
     */
    public function getSetId(): int
    {
        return $this->setId;
    }

    /**
     * Set Identifier of the sticker set to which the sticker belongs; 0 if none.
     */
    public function setSetId(int $setId): self
    {
        $this->setId = $setId;

        return $this;
    }

    /**
     * Get Sticker width; as defined by the sender.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Sticker width; as defined by the sender.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Sticker height; as defined by the sender.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Sticker height; as defined by the sender.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Emoji corresponding to the sticker.
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji corresponding to the sticker.
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get Sticker format.
     */
    public function getFormat(): StickerFormat|null
    {
        return $this->format;
    }

    /**
     * Set Sticker format.
     */
    public function setFormat(StickerFormat|null $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get Sticker's full type.
     */
    public function getFullType(): StickerFullType|null
    {
        return $this->fullType;
    }

    /**
     * Set Sticker's full type.
     */
    public function setFullType(StickerFullType|null $fullType): self
    {
        $this->fullType = $fullType;

        return $this;
    }

    /**
     * Get Sticker thumbnail in WEBP or JPEG format; may be null.
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Sticker thumbnail in WEBP or JPEG format; may be null.
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File containing the sticker.
     */
    public function getSticker(): File|null
    {
        return $this->sticker;
    }

    /**
     * Set File containing the sticker.
     */
    public function setSticker(File|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sticker',
            'id' => $this->getId(),
            'set_id' => $this->getSetId(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'emoji' => $this->getEmoji(),
            'format' => $this->getFormat(),
            'full_type' => $this->getFullType(),
            'thumbnail' => $this->getThumbnail(),
            'sticker' => $this->getSticker(),
        ];
    }
}
