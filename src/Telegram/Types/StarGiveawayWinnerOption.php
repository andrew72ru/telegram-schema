<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for the number of winners of a Telegram Star giveaway.
 */
class StarGiveawayWinnerOption implements \JsonSerializable
{
    public function __construct(
        /** The number of users that will be chosen as winners */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** The number of Telegram Stars that will be won by the winners of the giveaway */
        #[SerializedName('won_star_count')]
        private int $wonStarCount,
        /** True, if the option must be chosen by default */
        #[SerializedName('is_default')]
        private bool $isDefault,
    ) {
    }

    /**
     * Get The number of users that will be chosen as winners.
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set The number of users that will be chosen as winners.
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars that will be won by the winners of the giveaway.
     */
    public function getWonStarCount(): int
    {
        return $this->wonStarCount;
    }

    /**
     * Set The number of Telegram Stars that will be won by the winners of the giveaway.
     */
    public function setWonStarCount(int $wonStarCount): self
    {
        $this->wonStarCount = $wonStarCount;

        return $this;
    }

    /**
     * Get True, if the option must be chosen by default.
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * Set True, if the option must be chosen by default.
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starGiveawayWinnerOption',
            'winner_count' => $this->getWinnerCount(),
            'won_star_count' => $this->getWonStarCount(),
            'is_default' => $this->getIsDefault(),
        ];
    }
}
