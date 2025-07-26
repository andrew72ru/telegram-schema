<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Boosts a chat and returns the list of available chat boost slots for the current user after the boost
 */
class BoostChat extends ChatBoostSlots implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifiers of boost slots of the current user from which to apply boosts to the chat */
        #[SerializedName('slot_ids')]
        private array|null $slotIds = null,
    ) {
    }

    /**
     * Get Identifier of the chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifiers of boost slots of the current user from which to apply boosts to the chat
     */
    public function getSlotIds(): array|null
    {
        return $this->slotIds;
    }

    /**
     * Set Identifiers of boost slots of the current user from which to apply boosts to the chat
     */
    public function setSlotIds(array|null $slotIds): self
    {
        $this->slotIds = $slotIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'boostChat',
            'chat_id' => $this->getChatId(),
            'slot_ids' => $this->getSlotIds(),
        ];
    }
}
