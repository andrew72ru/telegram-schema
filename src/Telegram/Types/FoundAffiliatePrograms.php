<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of found affiliate programs.
 */
class FoundAffiliatePrograms implements \JsonSerializable
{
    public function __construct(
        /** The total number of found affiliate programs */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The list of affiliate programs */
        #[SerializedName('programs')]
        private array|null $programs = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get The total number of found affiliate programs.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set The total number of found affiliate programs.
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The list of affiliate programs.
     */
    public function getPrograms(): array|null
    {
        return $this->programs;
    }

    /**
     * Set The list of affiliate programs.
     */
    public function setPrograms(array|null $programs): self
    {
        $this->programs = $programs;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results.
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results.
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundAffiliatePrograms',
            'total_count' => $this->getTotalCount(),
            'programs' => $this->getPrograms(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
