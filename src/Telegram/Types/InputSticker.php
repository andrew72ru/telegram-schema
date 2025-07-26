<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A sticker to be added to a sticker set
 */
class InputSticker implements \JsonSerializable
{
    public function __construct(
        /** File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** Format of the sticker */
        #[SerializedName('format')]
        private StickerFormat|null $format = null,
        /** String with 1-20 emoji corresponding to the sticker */
        #[SerializedName('emojis')]
        private string $emojis,
        /** Position where the mask is placed; pass null if not specified */
        #[SerializedName('mask_position')]
        private MaskPosition|null $maskPosition = null,
        /** List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker */
        #[SerializedName('keywords')]
        private array|null $keywords = null,
    ) {
    }

    /**
     * Get File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side.
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set File with the sticker; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side.
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get Format of the sticker
     */
    public function getFormat(): StickerFormat|null
    {
        return $this->format;
    }

    /**
     * Set Format of the sticker
     */
    public function setFormat(StickerFormat|null $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get String with 1-20 emoji corresponding to the sticker
     */
    public function getEmojis(): string
    {
        return $this->emojis;
    }

    /**
     * Set String with 1-20 emoji corresponding to the sticker
     */
    public function setEmojis(string $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    /**
     * Get Position where the mask is placed; pass null if not specified
     */
    public function getMaskPosition(): MaskPosition|null
    {
        return $this->maskPosition;
    }

    /**
     * Set Position where the mask is placed; pass null if not specified
     */
    public function setMaskPosition(MaskPosition|null $maskPosition): self
    {
        $this->maskPosition = $maskPosition;

        return $this;
    }

    /**
     * Get List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker
     */
    public function getKeywords(): array|null
    {
        return $this->keywords;
    }

    /**
     * Set List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker
     */
    public function setKeywords(array|null $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputSticker',
            'sticker' => $this->getSticker(),
            'format' => $this->getFormat(),
            'emojis' => $this->getEmojis(),
            'mask_position' => $this->getMaskPosition(),
            'keywords' => $this->getKeywords(),
        ];
    }
}
