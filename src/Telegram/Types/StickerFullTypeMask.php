<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sticker is a mask in WEBP format to be placed on photos or videos @mask_position Position where the mask is placed; may be null
 */
class StickerFullTypeMask extends StickerFullType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('mask_position')]
        private MaskPosition|null $maskPosition = null,
    ) {
    }

    public function getMaskPosition(): MaskPosition|null
    {
        return $this->maskPosition;
    }

    public function setMaskPosition(MaskPosition|null $maskPosition): self
    {
        $this->maskPosition = $maskPosition;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFullTypeMask',
            'mask_position' => $this->getMaskPosition(),
        ];
    }
}
