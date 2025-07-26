<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the position of a sticker in the set to which it belongs. The sticker set must be owned by the current user
 */
class SetStickerPositionInSet extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** New position of the sticker in the set, 0-based */
        #[SerializedName('position')]
        private int $position,
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
     * Get New position of the sticker in the set, 0-based
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * Set New position of the sticker in the set, 0-based
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStickerPositionInSet',
            'sticker' => $this->getSticker(),
            'position' => $this->getPosition(),
        ];
    }
}
