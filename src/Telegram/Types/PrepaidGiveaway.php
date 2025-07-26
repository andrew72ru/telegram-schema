<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a prepaid giveaway
 */
class PrepaidGiveaway implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the prepaid giveaway */
        #[SerializedName('id')]
        private int $id,
        /** Number of users which will receive giveaway prize */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Prize of the giveaway */
        #[SerializedName('prize')]
        private GiveawayPrize|null $prize = null,
        /** The number of boosts received by the chat from the giveaway; for Telegram Star giveaways only */
        #[SerializedName('boost_count')]
        private int $boostCount,
        /** Point in time (Unix timestamp) when the giveaway was paid */
        #[SerializedName('payment_date')]
        private int $paymentDate,
    ) {
    }

    /**
     * Get Unique identifier of the prepaid giveaway
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the prepaid giveaway
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Number of users which will receive giveaway prize
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of users which will receive giveaway prize
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Prize of the giveaway
     */
    public function getPrize(): GiveawayPrize|null
    {
        return $this->prize;
    }

    /**
     * Set Prize of the giveaway
     */
    public function setPrize(GiveawayPrize|null $prize): self
    {
        $this->prize = $prize;

        return $this;
    }

    /**
     * Get The number of boosts received by the chat from the giveaway; for Telegram Star giveaways only
     */
    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    /**
     * Set The number of boosts received by the chat from the giveaway; for Telegram Star giveaways only
     */
    public function setBoostCount(int $boostCount): self
    {
        $this->boostCount = $boostCount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the giveaway was paid
     */
    public function getPaymentDate(): int
    {
        return $this->paymentDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the giveaway was paid
     */
    public function setPaymentDate(int $paymentDate): self
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'prepaidGiveaway',
            'id' => $this->getId(),
            'winner_count' => $this->getWinnerCount(),
            'prize' => $this->getPrize(),
            'boost_count' => $this->getBoostCount(),
            'payment_date' => $this->getPaymentDate(),
        ];
    }
}
