<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A URL linking to a sticker set @sticker_set_id Identifier of the sticker set
 */
class TMeUrlTypeStickerSet extends TMeUrlType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_set_id')]
        private int $stickerSetId,
    ) {
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function setStickerSetId(int $stickerSetId): self
    {
        $this->stickerSetId = $stickerSetId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'tMeUrlTypeStickerSet',
            'sticker_set_id' => $this->getStickerSetId(),
        ];
    }
}
