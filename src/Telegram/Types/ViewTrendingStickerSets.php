<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs the server that some trending sticker sets have been viewed by the user @sticker_set_ids Identifiers of viewed trending sticker sets.
 */
class ViewTrendingStickerSets extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_set_ids')]
        private array|null $stickerSetIds = null,
    ) {
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
            '@type' => 'viewTrendingStickerSets',
            'sticker_set_ids' => $this->getStickerSetIds(),
        ];
    }
}
