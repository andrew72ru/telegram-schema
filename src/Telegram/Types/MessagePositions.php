<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of message positions @total_count Total number of messages found @positions List of message positions
 */
class MessagePositions implements \JsonSerializable
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
            '@type' => 'messagePositions',
            'total_count' => $this->getTotalCount(),
            'positions' => $this->getPositions(),
        ];
    }
}
