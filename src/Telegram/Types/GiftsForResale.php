<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes gifts available for resale
 */
class GiftsForResale implements \JsonSerializable
{
    public function __construct(
        /** Total number of gifts found */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The gifts */
        #[SerializedName('gifts')]
        private array|null $gifts = null,
        /** Available models; for searchGiftsForResale requests without offset and attributes only */
        #[SerializedName('models')]
        private array|null $models = null,
        /** Available symbols; for searchGiftsForResale requests without offset and attributes only */
        #[SerializedName('symbols')]
        private array|null $symbols = null,
        /** Available backdrops; for searchGiftsForResale requests without offset and attributes only */
        #[SerializedName('backdrops')]
        private array|null $backdrops = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Total number of gifts found
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Total number of gifts found
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The gifts
     */
    public function getGifts(): array|null
    {
        return $this->gifts;
    }

    /**
     * Set The gifts
     */
    public function setGifts(array|null $gifts): self
    {
        $this->gifts = $gifts;

        return $this;
    }

    /**
     * Get Available models; for searchGiftsForResale requests without offset and attributes only
     */
    public function getModels(): array|null
    {
        return $this->models;
    }

    /**
     * Set Available models; for searchGiftsForResale requests without offset and attributes only
     */
    public function setModels(array|null $models): self
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get Available symbols; for searchGiftsForResale requests without offset and attributes only
     */
    public function getSymbols(): array|null
    {
        return $this->symbols;
    }

    /**
     * Set Available symbols; for searchGiftsForResale requests without offset and attributes only
     */
    public function setSymbols(array|null $symbols): self
    {
        $this->symbols = $symbols;

        return $this;
    }

    /**
     * Get Available backdrops; for searchGiftsForResale requests without offset and attributes only
     */
    public function getBackdrops(): array|null
    {
        return $this->backdrops;
    }

    /**
     * Set Available backdrops; for searchGiftsForResale requests without offset and attributes only
     */
    public function setBackdrops(array|null $backdrops): self
    {
        $this->backdrops = $backdrops;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftsForResale',
            'total_count' => $this->getTotalCount(),
            'gifts' => $this->getGifts(),
            'models' => $this->getModels(),
            'symbols' => $this->getSymbols(),
            'backdrops' => $this->getBackdrops(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
