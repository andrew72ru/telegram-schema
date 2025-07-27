<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of Telegram Star subscriptions.
 */
class StarSubscriptions implements \JsonSerializable
{
    public function __construct(
        /** The amount of owned Telegram Stars */
        #[SerializedName('star_amount')]
        private StarAmount|null $starAmount = null,
        /** List of subscriptions for Telegram Stars */
        #[SerializedName('subscriptions')]
        private array|null $subscriptions = null,
        /** The number of Telegram Stars required to buy to extend subscriptions expiring soon */
        #[SerializedName('required_star_count')]
        private int $requiredStarCount,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get The amount of owned Telegram Stars.
     */
    public function getStarAmount(): StarAmount|null
    {
        return $this->starAmount;
    }

    /**
     * Set The amount of owned Telegram Stars.
     */
    public function setStarAmount(StarAmount|null $starAmount): self
    {
        $this->starAmount = $starAmount;

        return $this;
    }

    /**
     * Get List of subscriptions for Telegram Stars.
     */
    public function getSubscriptions(): array|null
    {
        return $this->subscriptions;
    }

    /**
     * Set List of subscriptions for Telegram Stars.
     */
    public function setSubscriptions(array|null $subscriptions): self
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }

    /**
     * Get The number of Telegram Stars required to buy to extend subscriptions expiring soon.
     */
    public function getRequiredStarCount(): int
    {
        return $this->requiredStarCount;
    }

    /**
     * Set The number of Telegram Stars required to buy to extend subscriptions expiring soon.
     */
    public function setRequiredStarCount(int $requiredStarCount): self
    {
        $this->requiredStarCount = $requiredStarCount;

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
            '@type' => 'starSubscriptions',
            'star_amount' => $this->getStarAmount(),
            'subscriptions' => $this->getSubscriptions(),
            'required_star_count' => $this->getRequiredStarCount(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
