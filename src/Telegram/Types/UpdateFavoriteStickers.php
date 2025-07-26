<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of favorite stickers was updated @sticker_ids The new list of file identifiers of favorite stickers
 */
class UpdateFavoriteStickers extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_ids')]
        private array|null $stickerIds = null,
    ) {
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
            '@type' => 'updateFavoriteStickers',
            'sticker_ids' => $this->getStickerIds(),
        ];
    }
}
