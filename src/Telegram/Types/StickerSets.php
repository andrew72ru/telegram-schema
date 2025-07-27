<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of sticker sets @total_count Approximate total number of sticker sets found @sets List of sticker sets.
 */
class StickerSets implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('sets')]
        private array|null $sets = null,
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

    public function getSets(): array|null
    {
        return $this->sets;
    }

    public function setSets(array|null $sets): self
    {
        $this->sets = $sets;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerSets',
            'total_count' => $this->getTotalCount(),
            'sets' => $this->getSets(),
        ];
    }
}
