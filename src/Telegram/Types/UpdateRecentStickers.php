<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of recently used stickers was updated @is_attached True, if the list of stickers attached to photo or video files was updated; otherwise, the list of sent stickers is updated @sticker_ids The new list of file identifiers of recently used stickers
 */
class UpdateRecentStickers extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_attached')]
        private bool $isAttached,
        #[SerializedName('sticker_ids')]
        private array|null $stickerIds = null,
    ) {
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function setIsAttached(bool $isAttached): self
    {
        $this->isAttached = $isAttached;

        return $this;
    }

    public function getStickerIds(): array|null
    {
        return $this->stickerIds;
    }

    public function setStickerIds(array|null $stickerIds): self
    {
        $this->stickerIds = $stickerIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateRecentStickers',
            'is_attached' => $this->getIsAttached(),
            'sticker_ids' => $this->getStickerIds(),
        ];
    }
}
