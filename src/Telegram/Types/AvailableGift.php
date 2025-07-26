<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a gift that is available for purchase
 */
class AvailableGift implements \JsonSerializable
{
    public function __construct(
        /** The gift */
        #[SerializedName('gift')]
        private Gift|null $gift = null,
        /** Number of gifts that are available for resale */
        #[SerializedName('resale_count')]
        private int $resaleCount,
        /** The minimum price for the gifts available for resale; 0 if there are no such gifts */
        #[SerializedName('min_resale_star_count')]
        private int $minResaleStarCount,
        /** The title of the upgraded gift; empty if the gift isn't available for resale */
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    /**
     * Get The gift
     */
    public function getGift(): Gift|null
    {
        return $this->gift;
    }

    /**
     * Set The gift
     */
    public function setGift(Gift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Number of gifts that are available for resale
     */
    public function getResaleCount(): int
    {
        return $this->resaleCount;
    }

    /**
     * Set Number of gifts that are available for resale
     */
    public function setResaleCount(int $resaleCount): self
    {
        $this->resaleCount = $resaleCount;

        return $this;
    }

    /**
     * Get The minimum price for the gifts available for resale; 0 if there are no such gifts
     */
    public function getMinResaleStarCount(): int
    {
        return $this->minResaleStarCount;
    }

    /**
     * Set The minimum price for the gifts available for resale; 0 if there are no such gifts
     */
    public function setMinResaleStarCount(int $minResaleStarCount): self
    {
        $this->minResaleStarCount = $minResaleStarCount;

        return $this;
    }

    /**
     * Get The title of the upgraded gift; empty if the gift isn't available for resale
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set The title of the upgraded gift; empty if the gift isn't available for resale
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'availableGift',
            'gift' => $this->getGift(),
            'resale_count' => $this->getResaleCount(),
            'min_resale_star_count' => $this->getMinResaleStarCount(),
            'title' => $this->getTitle(),
        ];
    }
}
