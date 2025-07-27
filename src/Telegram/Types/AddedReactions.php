<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of reactions added to a message @total_count The total number of found reactions @reactions The list of added reactions @next_offset The offset for the next request. If empty, then there are no more results.
 */
class AddedReactions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('reactions')]
        private array|null $reactions = null,
        #[SerializedName('next_offset')]
        private string $nextOffset,
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

    public function getReactions(): array|null
    {
        return $this->reactions;
    }

    public function setReactions(array|null $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addedReactions',
            'total_count' => $this->getTotalCount(),
            'reactions' => $this->getReactions(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
