<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A giveaway without public winners has been completed for the chat.
 */
class MessageGiveawayCompleted extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the message with the giveaway; can be 0 if the message was deleted */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
        /** Number of winners in the giveaway */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** True, if the giveaway is a Telegram Star giveaway */
        #[SerializedName('is_star_giveaway')]
        private bool $isStarGiveaway,
        /** Number of undistributed prizes; for Telegram Premium giveaways only */
        #[SerializedName('unclaimed_prize_count')]
        private int $unclaimedPrizeCount,
    ) {
    }

    /**
     * Get Identifier of the message with the giveaway; can be 0 if the message was deleted.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the message with the giveaway; can be 0 if the message was deleted.
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    /**
     * Get Number of winners in the giveaway.
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of winners in the giveaway.
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get True, if the giveaway is a Telegram Star giveaway.
     */
    public function getIsStarGiveaway(): bool
    {
        return $this->isStarGiveaway;
    }

    /**
     * Set True, if the giveaway is a Telegram Star giveaway.
     */
    public function setIsStarGiveaway(bool $isStarGiveaway): self
    {
        $this->isStarGiveaway = $isStarGiveaway;

        return $this;
    }

    /**
     * Get Number of undistributed prizes; for Telegram Premium giveaways only.
     */
    public function getUnclaimedPrizeCount(): int
    {
        return $this->unclaimedPrizeCount;
    }

    /**
     * Set Number of undistributed prizes; for Telegram Premium giveaways only.
     */
    public function setUnclaimedPrizeCount(int $unclaimedPrizeCount): self
    {
        $this->unclaimedPrizeCount = $unclaimedPrizeCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiveawayCompleted',
            'giveaway_message_id' => $this->getGiveawayMessageId(),
            'winner_count' => $this->getWinnerCount(),
            'is_star_giveaway' => $this->getIsStarGiveaway(),
            'unclaimed_prize_count' => $this->getUnclaimedPrizeCount(),
        ];
    }
}
