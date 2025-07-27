<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of affiliate programs that were connected to an affiliate.
 */
class ConnectedAffiliatePrograms implements \JsonSerializable
{
    public function __construct(
        /** The total number of affiliate programs that were connected to the affiliate */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The list of connected affiliate programs */
        #[SerializedName('programs')]
        private array|null $programs = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get The total number of affiliate programs that were connected to the affiliate.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set The total number of affiliate programs that were connected to the affiliate.
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The list of connected affiliate programs.
     */
    public function getPrograms(): array|null
    {
        return $this->programs;
    }

    /**
     * Set The list of connected affiliate programs.
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
            '@type' => 'connectedAffiliatePrograms',
            'total_count' => $this->getTotalCount(),
            'programs' => $this->getPrograms(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
