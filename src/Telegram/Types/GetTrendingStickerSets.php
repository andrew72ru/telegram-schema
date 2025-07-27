<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of trending sticker sets. For optimal performance, the number of returned sticker sets is chosen by TDLib.
 */
class GetTrendingStickerSets extends TrendingStickerSets implements \JsonSerializable
{
    public function __construct(
        /** Type of the sticker sets to return */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** The offset from which to return the sticker sets; must be non-negative */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Type of the sticker sets to return.
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the sticker sets to return.
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get The offset from which to return the sticker sets; must be non-negative.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set The offset from which to return the sticker sets; must be non-negative.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getTrendingStickerSets',
            'sticker_type' => $this->getStickerType(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
