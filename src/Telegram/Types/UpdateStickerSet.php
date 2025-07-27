<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A sticker set has changed @sticker_set The sticker set.
 */
class UpdateStickerSet extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_set')]
        private StickerSet|null $stickerSet = null,
    ) {
    }

    public function getStickerSet(): StickerSet|null
    {
        return $this->stickerSet;
    }

    public function setStickerSet(StickerSet|null $stickerSet): self
    {
        $this->stickerSet = $stickerSet;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStickerSet',
            'sticker_set' => $this->getStickerSet(),
        ];
    }
}
