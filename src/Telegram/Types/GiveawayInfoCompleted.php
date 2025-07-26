<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a completed giveaway
 */
class GiveawayInfoCompleted extends GiveawayInfo implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the giveaway was created */
        #[SerializedName('creation_date')]
        private int $creationDate,
        /** Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway */
        #[SerializedName('actual_winners_selection_date')]
        private int $actualWinnersSelectionDate,
        /** True, if the giveaway was canceled and was fully refunded */
        #[SerializedName('was_refunded')]
        private bool $wasRefunded,
        /** True, if the current user is a winner of the giveaway */
        #[SerializedName('is_winner')]
        private bool $isWinner,
        /** Number of winners in the giveaway */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Number of winners, which activated their gift codes; for Telegram Premium giveaways only */
        #[SerializedName('activation_count')]
        private int $activationCount,
        /** Telegram Premium gift code that was received by the current user; empty if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Premium giveaway */
        #[SerializedName('gift_code')]
        private string $giftCode,
        /** The amount of Telegram Stars won by the current user; 0 if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Star giveaway */
        #[SerializedName('won_star_count')]
        private int $wonStarCount,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the giveaway was created
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the giveaway was created
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway
     */
    public function getActualWinnersSelectionDate(): int
    {
        return $this->actualWinnersSelectionDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway
     */
    public function setActualWinnersSelectionDate(int $actualWinnersSelectionDate): self
    {
        $this->actualWinnersSelectionDate = $actualWinnersSelectionDate;

        return $this;
    }

    /**
     * Get True, if the giveaway was canceled and was fully refunded
     */
    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
    }

    /**
     * Set True, if the giveaway was canceled and was fully refunded
     */
    public function setWasRefunded(bool $wasRefunded): self
    {
        $this->wasRefunded = $wasRefunded;

        return $this;
    }

    /**
     * Get True, if the current user is a winner of the giveaway
     */
    public function getIsWinner(): bool
    {
        return $this->isWinner;
    }

    /**
     * Set True, if the current user is a winner of the giveaway
     */
    public function setIsWinner(bool $isWinner): self
    {
        $this->isWinner = $isWinner;

        return $this;
    }

    /**
     * Get Number of winners in the giveaway
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of winners in the giveaway
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Number of winners, which activated their gift codes; for Telegram Premium giveaways only
     */
    public function getActivationCount(): int
    {
        return $this->activationCount;
    }

    /**
     * Set Number of winners, which activated their gift codes; for Telegram Premium giveaways only
     */
    public function setActivationCount(int $activationCount): self
    {
        $this->activationCount = $activationCount;

        return $this;
    }

    /**
     * Get Telegram Premium gift code that was received by the current user; empty if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Premium giveaway
     */
    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    /**
     * Set Telegram Premium gift code that was received by the current user; empty if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Premium giveaway
     */
    public function setGiftCode(string $giftCode): self
    {
        $this->giftCode = $giftCode;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars won by the current user; 0 if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Star giveaway
     */
    public function getWonStarCount(): int
    {
        return $this->wonStarCount;
    }

    /**
     * Set The amount of Telegram Stars won by the current user; 0 if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Star giveaway
     */
    public function setWonStarCount(int $wonStarCount): self
    {
        $this->wonStarCount = $wonStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayInfoCompleted',
            'creation_date' => $this->getCreationDate(),
            'actual_winners_selection_date' => $this->getActualWinnersSelectionDate(),
            'was_refunded' => $this->getWasRefunded(),
            'is_winner' => $this->getIsWinner(),
            'winner_count' => $this->getWinnerCount(),
            'activation_count' => $this->getActivationCount(),
            'gift_code' => $this->getGiftCode(),
            'won_star_count' => $this->getWonStarCount(),
        ];
    }
}
