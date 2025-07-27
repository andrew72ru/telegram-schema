<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of trending sticker sets was updated or some of them were viewed @sticker_type Type of the affected stickers @sticker_sets The prefix of the list of trending sticker sets with the newest trending sticker sets.
 */
class UpdateTrendingStickerSets extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        #[SerializedName('sticker_sets')]
        private TrendingStickerSets|null $stickerSets = null,
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

    public function getStickerSets(): TrendingStickerSets|null
    {
        return $this->stickerSets;
    }

    public function setStickerSets(TrendingStickerSets|null $stickerSets): self
    {
        $this->stickerSets = $stickerSets;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateTrendingStickerSets',
            'sticker_type' => $this->getStickerType(),
            'sticker_sets' => $this->getStickerSets(),
        ];
    }
}
