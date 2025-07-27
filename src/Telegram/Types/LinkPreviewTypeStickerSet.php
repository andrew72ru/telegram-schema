<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a sticker set @stickers Up to 4 stickers from the sticker set.
 */
class LinkPreviewTypeStickerSet extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('stickers')]
        private array|null $stickers = null,
    ) {
    }

    public function getStickers(): array|null
    {
        return $this->stickers;
    }

    public function setStickers(array|null $stickers): self
    {
        $this->stickers = $stickers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeStickerSet',
            'stickers' => $this->getStickers(),
        ];
    }
}
