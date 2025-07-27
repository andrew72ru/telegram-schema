<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of installed sticker sets was updated @sticker_type Type of the affected stickers @sticker_set_ids The new list of installed ordinary sticker sets.
 */
class UpdateInstalledStickerSets extends Update implements \JsonSerializable
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
            '@type' => 'updateInstalledStickerSets',
            'sticker_type' => $this->getStickerType(),
            'sticker_set_ids' => $this->getStickerSetIds(),
        ];
    }
}
