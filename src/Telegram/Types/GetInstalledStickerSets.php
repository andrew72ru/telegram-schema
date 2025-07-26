<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of installed sticker sets @sticker_type Type of the sticker sets to return
 */
class GetInstalledStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInstalledStickerSets',
            'sticker_type' => $this->getStickerType(),
        ];
    }
}
