<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of trending sticker sets @total_count Approximate total number of trending sticker sets @sets List of trending sticker sets @is_premium True, if the list contains sticker sets with premium stickers.
 */
class TrendingStickerSets implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('sets')]
        private array|null $sets = null,
        #[SerializedName('is_premium')]
        private bool $isPremium,
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

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function setIsPremium(bool $isPremium): self
    {
        $this->isPremium = $isPremium;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'trendingStickerSets',
            'total_count' => $this->getTotalCount(),
            'sets' => $this->getSets(),
            'is_premium' => $this->getIsPremium(),
        ];
    }
}
