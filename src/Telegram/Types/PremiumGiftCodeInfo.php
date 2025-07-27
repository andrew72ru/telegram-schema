<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Telegram Premium gift code.
 */
class PremiumGiftCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a chat or a user that created the gift code; may be null if unknown. If null and the code is from messagePremiumGiftCode message, then creator_id from the message can be used */
        #[SerializedName('creator_id')]
        private MessageSender|null $creatorId = null,
        /** Point in time (Unix timestamp) when the code was created */
        #[SerializedName('creation_date')]
        private int $creationDate,
        /** True, if the gift code was created for a giveaway */
        #[SerializedName('is_from_giveaway')]
        private bool $isFromGiveaway,
        /** Identifier of the corresponding giveaway message in the creator_id chat; can be 0 or an identifier of a deleted message */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
        /** Number of months the Telegram Premium subscription will be active after code activation */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Identifier of a user for which the code was created; 0 if none */
        #[SerializedName('user_id')]
        private int $userId,
        /** Point in time (Unix timestamp) when the code was activated; 0 if none */
        #[SerializedName('use_date')]
        private int $useDate,
    ) {
    }

    /**
     * Get Identifier of a chat or a user that created the gift code; may be null if unknown. If null and the code is from messagePremiumGiftCode message, then creator_id from the message can be used.
     */
    public function getCreatorId(): MessageSender|null
    {
        return $this->creatorId;
    }

    /**
     * Set Identifier of a chat or a user that created the gift code; may be null if unknown. If null and the code is from messagePremiumGiftCode message, then creator_id from the message can be used.
     */
    public function setCreatorId(MessageSender|null $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the code was created.
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the code was created.
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get True, if the gift code was created for a giveaway.
     */
    public function getIsFromGiveaway(): bool
    {
        return $this->isFromGiveaway;
    }

    /**
     * Set True, if the gift code was created for a giveaway.
     */
    public function setIsFromGiveaway(bool $isFromGiveaway): self
    {
        $this->isFromGiveaway = $isFromGiveaway;

        return $this;
    }

    /**
     * Get Identifier of the corresponding giveaway message in the creator_id chat; can be 0 or an identifier of a deleted message.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the corresponding giveaway message in the creator_id chat; can be 0 or an identifier of a deleted message.
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active after code activation.
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active after code activation.
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Identifier of a user for which the code was created; 0 if none.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of a user for which the code was created; 0 if none.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the code was activated; 0 if none.
     */
    public function getUseDate(): int
    {
        return $this->useDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the code was activated; 0 if none.
     */
    public function setUseDate(int $useDate): self
    {
        $this->useDate = $useDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumGiftCodeInfo',
            'creator_id' => $this->getCreatorId(),
            'creation_date' => $this->getCreationDate(),
            'is_from_giveaway' => $this->getIsFromGiveaway(),
            'giveaway_message_id' => $this->getGiveawayMessageId(),
            'month_count' => $this->getMonthCount(),
            'user_id' => $this->getUserId(),
            'use_date' => $this->getUseDate(),
        ];
    }
}
