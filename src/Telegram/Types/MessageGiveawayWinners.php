<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A giveaway with public winners has been completed for the chat
 */
class MessageGiveawayWinners extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway */
        #[SerializedName('boosted_chat_id')]
        private int $boostedChatId,
        /** Identifier of the message with the giveaway in the boosted chat */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
        /** Number of other chats that participated in the giveaway */
        #[SerializedName('additional_chat_count')]
        private int $additionalChatCount,
        /** Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway */
        #[SerializedName('actual_winners_selection_date')]
        private int $actualWinnersSelectionDate,
        /** True, if only new members of the chats were eligible for the giveaway */
        #[SerializedName('only_new_members')]
        private bool $onlyNewMembers,
        /** True, if the giveaway was canceled and was fully refunded */
        #[SerializedName('was_refunded')]
        private bool $wasRefunded,
        /** Prize of the giveaway */
        #[SerializedName('prize')]
        private GiveawayPrize|null $prize = null,
        /** Additional description of the giveaway prize */
        #[SerializedName('prize_description')]
        private string $prizeDescription,
        /** Total number of winners in the giveaway */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Up to 100 user identifiers of the winners of the giveaway */
        #[SerializedName('winner_user_ids')]
        private array|null $winnerUserIds = null,
        /** Number of undistributed prizes; for Telegram Premium giveaways only */
        #[SerializedName('unclaimed_prize_count')]
        private int $unclaimedPrizeCount,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway
     */
    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    /**
     * Set Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway
     */
    public function setBoostedChatId(int $boostedChatId): self
    {
        $this->boostedChatId = $boostedChatId;

        return $this;
    }

    /**
     * Get Identifier of the message with the giveaway in the boosted chat
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the message with the giveaway in the boosted chat
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    /**
     * Get Number of other chats that participated in the giveaway
     */
    public function getAdditionalChatCount(): int
    {
        return $this->additionalChatCount;
    }

    /**
     * Set Number of other chats that participated in the giveaway
     */
    public function setAdditionalChatCount(int $additionalChatCount): self
    {
        $this->additionalChatCount = $additionalChatCount;

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
     * Get True, if only new members of the chats were eligible for the giveaway
     */
    public function getOnlyNewMembers(): bool
    {
        return $this->onlyNewMembers;
    }

    /**
     * Set True, if only new members of the chats were eligible for the giveaway
     */
    public function setOnlyNewMembers(bool $onlyNewMembers): self
    {
        $this->onlyNewMembers = $onlyNewMembers;

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
     * Get Additional description of the giveaway prize
     */
    public function getPrizeDescription(): string
    {
        return $this->prizeDescription;
    }

    /**
     * Set Additional description of the giveaway prize
     */
    public function setPrizeDescription(string $prizeDescription): self
    {
        $this->prizeDescription = $prizeDescription;

        return $this;
    }

    /**
     * Get Total number of winners in the giveaway
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Total number of winners in the giveaway
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Up to 100 user identifiers of the winners of the giveaway
     */
    public function getWinnerUserIds(): array|null
    {
        return $this->winnerUserIds;
    }

    /**
     * Set Up to 100 user identifiers of the winners of the giveaway
     */
    public function setWinnerUserIds(array|null $winnerUserIds): self
    {
        $this->winnerUserIds = $winnerUserIds;

        return $this;
    }

    /**
     * Get Number of undistributed prizes; for Telegram Premium giveaways only
     */
    public function getUnclaimedPrizeCount(): int
    {
        return $this->unclaimedPrizeCount;
    }

    /**
     * Set Number of undistributed prizes; for Telegram Premium giveaways only
     */
    public function setUnclaimedPrizeCount(int $unclaimedPrizeCount): self
    {
        $this->unclaimedPrizeCount = $unclaimedPrizeCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiveawayWinners',
            'boosted_chat_id' => $this->getBoostedChatId(),
            'giveaway_message_id' => $this->getGiveawayMessageId(),
            'additional_chat_count' => $this->getAdditionalChatCount(),
            'actual_winners_selection_date' => $this->getActualWinnersSelectionDate(),
            'only_new_members' => $this->getOnlyNewMembers(),
            'was_refunded' => $this->getWasRefunded(),
            'prize' => $this->getPrize(),
            'prize_description' => $this->getPrizeDescription(),
            'winner_count' => $this->getWinnerCount(),
            'winner_user_ids' => $this->getWinnerUserIds(),
            'unclaimed_prize_count' => $this->getUnclaimedPrizeCount(),
        ];
    }
}
