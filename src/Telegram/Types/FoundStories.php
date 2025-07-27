<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of stories found by a search @total_count Approximate total number of stories found @stories List of stories @next_offset The offset for the next request. If empty, then there are no more results.
 */
class FoundStories implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('stories')]
        private array|null $stories = null,
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

    public function getStories(): array|null
    {
        return $this->stories;
    }

    public function setStories(array|null $stories): self
    {
        $this->stories = $stories;

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
            '@type' => 'foundStories',
            'total_count' => $this->getTotalCount(),
            'stories' => $this->getStories(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
