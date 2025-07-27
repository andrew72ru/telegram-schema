<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a photo.
 */
class Photo implements \JsonSerializable
{
    public function __construct(
        /** True, if stickers were added to the photo. The list of corresponding sticker sets can be received using getAttachedStickerSets */
        #[SerializedName('has_stickers')]
        private bool $hasStickers,
        /** Photo minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Available variants of the photo, in different sizes */
        #[SerializedName('sizes')]
        private array|null $sizes = null,
    ) {
    }

    /**
     * Get True, if stickers were added to the photo. The list of corresponding sticker sets can be received using getAttachedStickerSets.
     */
    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    /**
     * Set True, if stickers were added to the photo. The list of corresponding sticker sets can be received using getAttachedStickerSets.
     */
    public function setHasStickers(bool $hasStickers): self
    {
        $this->hasStickers = $hasStickers;

        return $this;
    }

    /**
     * Get Photo minithumbnail; may be null.
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Photo minithumbnail; may be null.
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Available variants of the photo, in different sizes.
     */
    public function getSizes(): array|null
    {
        return $this->sizes;
    }

    /**
     * Set Available variants of the photo, in different sizes.
     */
    public function setSizes(array|null $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'photo',
            'has_stickers' => $this->getHasStickers(),
            'minithumbnail' => $this->getMinithumbnail(),
            'sizes' => $this->getSizes(),
        ];
    }
}
