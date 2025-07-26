<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns sticker sets owned by the current user
 */
class GetOwnedStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the sticker set from which to return owned sticker sets; use 0 to get results from the beginning */
        #[SerializedName('offset_sticker_set_id')]
        private int $offsetStickerSetId,
        /** The maximum number of sticker sets to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the sticker set from which to return owned sticker sets; use 0 to get results from the beginning
     */
    public function getOffsetStickerSetId(): int
    {
        return $this->offsetStickerSetId;
    }

    /**
     * Set Identifier of the sticker set from which to return owned sticker sets; use 0 to get results from the beginning
     */
    public function setOffsetStickerSetId(int $offsetStickerSetId): self
    {
        $this->offsetStickerSetId = $offsetStickerSetId;

        return $this;
    }

    /**
     * Get The maximum number of sticker sets to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of sticker sets to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getOwnedStickerSets',
            'offset_sticker_set_id' => $this->getOffsetStickerSetId(),
            'limit' => $this->getLimit(),
        ];
    }
}
