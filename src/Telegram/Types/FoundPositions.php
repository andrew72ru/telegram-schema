<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains 0-based positions of matched objects @total_count Total number of matched objects @positions The positions of the matched objects.
 */
class FoundPositions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('positions')]
        private array|null $positions = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getPositions(): array|null
    {
        return $this->positions;
    }

    public function setPositions(array|null $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundPositions',
            'total_count' => $this->getTotalCount(),
            'positions' => $this->getPositions(),
        ];
    }
}
