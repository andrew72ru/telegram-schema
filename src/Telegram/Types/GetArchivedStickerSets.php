<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of archived sticker sets
 */
class GetArchivedStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        /** Type of the sticker sets to return */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Identifier of the sticker set from which to return the result; use 0 to get results from the beginning */
        #[SerializedName('offset_sticker_set_id')]
        private int $offsetStickerSetId,
        /** The maximum number of sticker sets to return; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Type of the sticker sets to return
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the sticker sets to return
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get Identifier of the sticker set from which to return the result; use 0 to get results from the beginning
     */
    public function getOffsetStickerSetId(): int
    {
        return $this->offsetStickerSetId;
    }

    /**
     * Set Identifier of the sticker set from which to return the result; use 0 to get results from the beginning
     */
    public function setOffsetStickerSetId(int $offsetStickerSetId): self
    {
        $this->offsetStickerSetId = $offsetStickerSetId;

        return $this;
    }

    /**
     * Get The maximum number of sticker sets to return; up to 100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of sticker sets to return; up to 100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getArchivedStickerSets',
            'sticker_type' => $this->getStickerType(),
            'offset_sticker_set_id' => $this->getOffsetStickerSetId(),
            'limit' => $this->getLimit(),
        ];
    }
}
