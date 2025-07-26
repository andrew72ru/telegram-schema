<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A sticker message
 */
class InputMessageSticker extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Sticker to be sent */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** Sticker thumbnail; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** Sticker width */
        #[SerializedName('width')]
        private int $width,
        /** Sticker height */
        #[SerializedName('height')]
        private int $height,
        /** Emoji used to choose the sticker */
        #[SerializedName('emoji')]
        private string $emoji,
    ) {
    }

    /**
     * Get Sticker to be sent
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker to be sent
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get Sticker thumbnail; pass null to skip thumbnail uploading
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Sticker thumbnail; pass null to skip thumbnail uploading
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Sticker width
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Sticker width
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Sticker height
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Sticker height
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Emoji used to choose the sticker
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji used to choose the sticker
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageSticker',
            'sticker' => $this->getSticker(),
            'thumbnail' => $this->getThumbnail(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'emoji' => $this->getEmoji(),
        ];
    }
}
