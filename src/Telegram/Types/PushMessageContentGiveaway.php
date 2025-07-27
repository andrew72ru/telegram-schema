<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a giveaway.
 */
class PushMessageContentGiveaway extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of users which will receive giveaway prizes; 0 for pinned message */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Prize of the giveaway; may be null for pinned message */
        #[SerializedName('prize')]
        private GiveawayPrize|null $prize = null,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Number of users which will receive giveaway prizes; 0 for pinned message.
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of users which will receive giveaway prizes; 0 for pinned message.
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Prize of the giveaway; may be null for pinned message.
     */
    public function getPrize(): GiveawayPrize|null
    {
        return $this->prize;
    }

    /**
     * Set Prize of the giveaway; may be null for pinned message.
     */
    public function setPrize(GiveawayPrize|null $prize): self
    {
        $this->prize = $prize;

        return $this;
    }

    /**
     * Get True, if the message is a pinned message with the specified content.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is a pinned message with the specified content.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentGiveaway',
            'winner_count' => $this->getWinnerCount(),
            'prize' => $this->getPrize(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
