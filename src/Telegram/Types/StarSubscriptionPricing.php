<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes subscription plan paid in Telegram Stars
 */
class StarSubscriptionPricing implements \JsonSerializable
{
    public function __construct(
        /** The number of seconds between consecutive Telegram Star debiting */
        #[SerializedName('period')]
        private int $period,
        /** The amount of Telegram Stars that must be paid for each period */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get The number of seconds between consecutive Telegram Star debiting
     */
    public function getPeriod(): int
    {
        return $this->period;
    }

    /**
     * Set The number of seconds between consecutive Telegram Star debiting
     */
    public function setPeriod(int $period): self
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars that must be paid for each period
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The amount of Telegram Stars that must be paid for each period
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starSubscriptionPricing',
            'period' => $this->getPeriod(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
