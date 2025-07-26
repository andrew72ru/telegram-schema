<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Launches a prepaid giveaway
 */
class LaunchPrepaidGiveaway extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the prepaid giveaway */
        #[SerializedName('giveaway_id')]
        private int $giveawayId,
        /** Giveaway parameters */
        #[SerializedName('parameters')]
        private GiveawayParameters|null $parameters = null,
        /** The number of users to receive giveaway prize */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** The number of Telegram Stars to be distributed through the giveaway; pass 0 for Telegram Premium giveaways */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Unique identifier of the prepaid giveaway
     */
    public function getGiveawayId(): int
    {
        return $this->giveawayId;
    }

    /**
     * Set Unique identifier of the prepaid giveaway
     */
    public function setGiveawayId(int $giveawayId): self
    {
        $this->giveawayId = $giveawayId;

        return $this;
    }

    /**
     * Get Giveaway parameters
     */
    public function getParameters(): GiveawayParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Giveaway parameters
     */
    public function setParameters(GiveawayParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get The number of users to receive giveaway prize
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set The number of users to receive giveaway prize
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars to be distributed through the giveaway; pass 0 for Telegram Premium giveaways
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars to be distributed through the giveaway; pass 0 for Telegram Premium giveaways
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'launchPrepaidGiveaway',
            'giveaway_id' => $this->getGiveawayId(),
            'parameters' => $this->getParameters(),
            'winner_count' => $this->getWinnerCount(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
