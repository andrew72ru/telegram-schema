<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat created a giveaway.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a user that won in the giveaway; 0 if none */
        #[SerializedName('user_id')]
        private int $userId,
        /** The created Telegram Premium gift code if it was used by the user or can be claimed by the current user; an empty string otherwise; for Telegram Premium giveways only */
        #[SerializedName('gift_code')]
        private string $giftCode,
        /** Number of Telegram Stars distributed among winners of the giveaway */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Identifier of the corresponding giveaway message; can be an identifier of a deleted message */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
        /** True, if the winner for the corresponding giveaway prize wasn't chosen, because there were not enough participants */
        #[SerializedName('is_unclaimed')]
        private bool $isUnclaimed,
    ) {
    }

    /**
     * Get Identifier of a user that won in the giveaway; 0 if none.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of a user that won in the giveaway; 0 if none.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The created Telegram Premium gift code if it was used by the user or can be claimed by the current user; an empty string otherwise; for Telegram Premium giveways only.
     */
    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    /**
     * Set The created Telegram Premium gift code if it was used by the user or can be claimed by the current user; an empty string otherwise; for Telegram Premium giveways only.
     */
    public function setGiftCode(string $giftCode): self
    {
        $this->giftCode = $giftCode;

        return $this;
    }

    /**
     * Get Number of Telegram Stars distributed among winners of the giveaway.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars distributed among winners of the giveaway.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Identifier of the corresponding giveaway message; can be an identifier of a deleted message.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the corresponding giveaway message; can be an identifier of a deleted message.
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    /**
     * Get True, if the winner for the corresponding giveaway prize wasn't chosen, because there were not enough participants.
     */
    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    /**
     * Set True, if the winner for the corresponding giveaway prize wasn't chosen, because there were not enough participants.
     */
    public function setIsUnclaimed(bool $isUnclaimed): self
    {
        $this->isUnclaimed = $isUnclaimed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostSourceGiveaway',
            'user_id' => $this->getUserId(),
            'gift_code' => $this->getGiftCode(),
            'star_count' => $this->getStarCount(),
            'giveaway_message_id' => $this->getGiveawayMessageId(),
            'is_unclaimed' => $this->getIsUnclaimed(),
        ];
    }
}
