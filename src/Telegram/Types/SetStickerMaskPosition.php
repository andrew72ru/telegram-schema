<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the mask position of a mask sticker. The sticker must belong to a mask sticker set that is owned by the current user
 */
class SetStickerMaskPosition extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
        /** Position where the mask is placed; pass null to remove mask position */
        #[SerializedName('mask_position')]
        private MaskPosition|null $maskPosition = null,
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
     * Get Position where the mask is placed; pass null to remove mask position
     */
    public function getMaskPosition(): MaskPosition|null
    {
        return $this->maskPosition;
    }

    /**
     * Set Position where the mask is placed; pass null to remove mask position
     */
    public function setMaskPosition(MaskPosition|null $maskPosition): self
    {
        $this->maskPosition = $maskPosition;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStickerMaskPosition',
            'sticker' => $this->getSticker(),
            'mask_position' => $this->getMaskPosition(),
        ];
    }
}
