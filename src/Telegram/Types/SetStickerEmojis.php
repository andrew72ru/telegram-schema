<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the list of emojis corresponding to a sticker. The sticker must belong to a regular or custom emoji sticker set that is owned by the current user.
 */
class SetStickerEmojis extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** New string with 1-20 emoji corresponding to the sticker */
        #[SerializedName('emojis')]
        private string $emojis,
    ) {
    }

    /**
     * Get Sticker.
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker.
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get New string with 1-20 emoji corresponding to the sticker.
     */
    public function getEmojis(): string
    {
        return $this->emojis;
    }

    /**
     * Set New string with 1-20 emoji corresponding to the sticker.
     */
    public function setEmojis(string $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStickerEmojis',
            'sticker' => $this->getSticker(),
            'emojis' => $this->getEmojis(),
        ];
    }
}
