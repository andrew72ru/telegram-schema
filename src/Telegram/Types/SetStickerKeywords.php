<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the list of keywords of a sticker. The sticker must belong to a regular or custom emoji sticker set that is owned by the current user
 */
class SetStickerKeywords extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker */
        #[SerializedName('keywords')]
        private array|null $keywords = null,
    ) {
    }

    /**
     * Get Sticker
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

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
            '@type' => 'setStickerKeywords',
            'sticker' => $this->getSticker(),
            'keywords' => $this->getKeywords(),
        ];
    }
}
