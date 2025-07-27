<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a slot for chat boost.
 */
class ChatBoostSlot implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the slot */
        #[SerializedName('slot_id')]
        private int $slotId,
        /** Identifier of the currently boosted chat; 0 if none */
        #[SerializedName('currently_boosted_chat_id')]
        private int $currentlyBoostedChatId,
        /** Point in time (Unix timestamp) when the chat was boosted; 0 if none */
        #[SerializedName('start_date')]
        private int $startDate,
        /** Point in time (Unix timestamp) when the boost will expire */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
        /** Point in time (Unix timestamp) after which the boost can be used for another chat */
        #[SerializedName('cooldown_until_date')]
        private int $cooldownUntilDate,
    ) {
    }

    /**
     * Get Unique identifier of the slot.
     */
    public function getSlotId(): int
    {
        return $this->slotId;
    }

    /**
     * Set Unique identifier of the slot.
     */
    public function setSlotId(int $slotId): self
    {
        $this->slotId = $slotId;

        return $this;
    }

    /**
     * Get Identifier of the currently boosted chat; 0 if none.
     */
    public function getCurrentlyBoostedChatId(): int
    {
        return $this->currentlyBoostedChatId;
    }

    /**
     * Set Identifier of the currently boosted chat; 0 if none.
     */
    public function setCurrentlyBoostedChatId(int $currentlyBoostedChatId): self
    {
        $this->currentlyBoostedChatId = $currentlyBoostedChatId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the chat was boosted; 0 if none.
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the chat was boosted; 0 if none.
     */
    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the boost will expire.
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the boost will expire.
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) after which the boost can be used for another chat.
     */
    public function getCooldownUntilDate(): int
    {
        return $this->cooldownUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) after which the boost can be used for another chat.
     */
    public function setCooldownUntilDate(int $cooldownUntilDate): self
    {
        $this->cooldownUntilDate = $cooldownUntilDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostSlot',
            'slot_id' => $this->getSlotId(),
            'currently_boosted_chat_id' => $this->getCurrentlyBoostedChatId(),
            'start_date' => $this->getStartDate(),
            'expiration_date' => $this->getExpirationDate(),
            'cooldown_until_date' => $this->getCooldownUntilDate(),
        ];
    }
}
