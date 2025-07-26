<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of installed sticker sets @sticker_type Type of the sticker sets to reorder @sticker_set_ids Identifiers of installed sticker sets in the new correct order
 */
class ReorderInstalledStickerSets extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        #[SerializedName('sticker_set_ids')]
        private array|null $stickerSetIds = null,
    ) {
    }

    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    public function getStickerSetIds(): array|null
    {
        return $this->stickerSetIds;
    }

    public function setStickerSetIds(array|null $stickerSetIds): self
    {
        $this->stickerSetIds = $stickerSetIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderInstalledStickerSets',
            'sticker_type' => $this->getStickerType(),
            'sticker_set_ids' => $this->getStickerSetIds(),
        ];
    }
}
