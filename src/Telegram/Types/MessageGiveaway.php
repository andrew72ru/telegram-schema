<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A giveaway
 */
class MessageGiveaway extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Giveaway parameters */
        #[SerializedName('parameters')]
        private GiveawayParameters|null $parameters = null,
        /** Number of users which will receive Telegram Premium subscription gift codes */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Prize of the giveaway */
        #[SerializedName('prize')]
        private GiveawayPrize|null $prize = null,
        /** A sticker to be shown in the message; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
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
     * Get Number of users which will receive Telegram Premium subscription gift codes
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of users which will receive Telegram Premium subscription gift codes
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
     * Get A sticker to be shown in the message; may be null if unknown
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set A sticker to be shown in the message; may be null if unknown
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiveaway',
            'parameters' => $this->getParameters(),
            'winner_count' => $this->getWinnerCount(),
            'prize' => $this->getPrize(),
            'sticker' => $this->getSticker(),
        ];
    }
}
