<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of interactions with a story
 */
class StoryInteractions implements \JsonSerializable
{
    public function __construct(
        /** Approximate total number of interactions found */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** Approximate total number of found forwards and reposts; always 0 for chat stories */
        #[SerializedName('total_forward_count')]
        private int $totalForwardCount,
        /** Approximate total number of found reactions; always 0 for chat stories */
        #[SerializedName('total_reaction_count')]
        private int $totalReactionCount,
        /** List of story interactions */
        #[SerializedName('interactions')]
        private array|null $interactions = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Approximate total number of interactions found
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Approximate total number of interactions found
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get Approximate total number of found forwards and reposts; always 0 for chat stories
     */
    public function getTotalForwardCount(): int
    {
        return $this->totalForwardCount;
    }

    /**
     * Set Approximate total number of found forwards and reposts; always 0 for chat stories
     */
    public function setTotalForwardCount(int $totalForwardCount): self
    {
        $this->totalForwardCount = $totalForwardCount;

        return $this;
    }

    /**
     * Get Approximate total number of found reactions; always 0 for chat stories
     */
    public function getTotalReactionCount(): int
    {
        return $this->totalReactionCount;
    }

    /**
     * Set Approximate total number of found reactions; always 0 for chat stories
     */
    public function setTotalReactionCount(int $totalReactionCount): self
    {
        $this->totalReactionCount = $totalReactionCount;

        return $this;
    }

    /**
     * Get List of story interactions
     */
    public function getInteractions(): array|null
    {
        return $this->interactions;
    }

    /**
     * Set List of story interactions
     */
    public function setInteractions(array|null $interactions): self
    {
        $this->interactions = $interactions;

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
            '@type' => 'storyInteractions',
            'total_count' => $this->getTotalCount(),
            'total_forward_count' => $this->getTotalForwardCount(),
            'total_reaction_count' => $this->getTotalReactionCount(),
            'interactions' => $this->getInteractions(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
