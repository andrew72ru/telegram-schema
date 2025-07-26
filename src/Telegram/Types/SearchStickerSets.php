<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for sticker sets by looking for specified query in their title and name. Excludes installed sticker sets from the results
 */
class SearchStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        /** Type of the sticker sets to return */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Query to search for */
        #[SerializedName('query')]
        private string $query,
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
     * Get Query to search for
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchStickerSets',
            'sticker_type' => $this->getStickerType(),
            'query' => $this->getQuery(),
        ];
    }
}
