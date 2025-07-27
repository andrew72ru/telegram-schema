<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for installed sticker sets by looking for specified query in their title and name @sticker_type Type of the sticker sets to search for @query Query to search for @limit The maximum number of sticker sets to return.
 */
class SearchInstalledStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        #[SerializedName('query')]
        private string $query,
        #[SerializedName('limit')]
        private int $limit,
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

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchInstalledStickerSets',
            'sticker_type' => $this->getStickerType(),
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
