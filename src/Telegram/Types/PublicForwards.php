<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of public forwards and reposts as a story of a message or a story
 */
class PublicForwards implements \JsonSerializable
{
    public function __construct(
        /** Approximate total number of messages and stories found */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** List of found public forwards and reposts */
        #[SerializedName('forwards')]
        private array|null $forwards = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Approximate total number of messages and stories found
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Approximate total number of messages and stories found
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get List of found public forwards and reposts
     */
    public function getForwards(): array|null
    {
        return $this->forwards;
    }

    /**
     * Set List of found public forwards and reposts
     */
    public function setForwards(array|null $forwards): self
    {
        $this->forwards = $forwards;

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
            '@type' => 'publicForwards',
            'total_count' => $this->getTotalCount(),
            'forwards' => $this->getForwards(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
