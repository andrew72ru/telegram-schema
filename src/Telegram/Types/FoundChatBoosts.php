<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of boosts applied to a chat
 */
class FoundChatBoosts implements \JsonSerializable
{
    public function __construct(
        /** Total number of boosts applied to the chat */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** List of boosts */
        #[SerializedName('boosts')]
        private array|null $boosts = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Total number of boosts applied to the chat
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Total number of boosts applied to the chat
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get List of boosts
     */
    public function getBoosts(): array|null
    {
        return $this->boosts;
    }

    /**
     * Set List of boosts
     */
    public function setBoosts(array|null $boosts): self
    {
        $this->boosts = $boosts;

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
            '@type' => 'foundChatBoosts',
            'total_count' => $this->getTotalCount(),
            'boosts' => $this->getBoosts(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
