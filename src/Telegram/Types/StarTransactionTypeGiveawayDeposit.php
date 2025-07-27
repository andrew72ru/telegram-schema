<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a deposit of Telegram Stars from a giveaway; for regular users only.
 */
class StarTransactionTypeGiveawayDeposit extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a supergroup or a channel chat that created the giveaway */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message with the giveaway; can be 0 or an identifier of a deleted message */
        #[SerializedName('giveaway_message_id')]
        private int $giveawayMessageId,
    ) {
    }

    /**
     * Get Identifier of a supergroup or a channel chat that created the giveaway.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a supergroup or a channel chat that created the giveaway.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message with the giveaway; can be 0 or an identifier of a deleted message.
     */
    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    /**
     * Set Identifier of the message with the giveaway; can be 0 or an identifier of a deleted message.
     */
    public function setGiveawayMessageId(int $giveawayMessageId): self
    {
        $this->giveawayMessageId = $giveawayMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeGiveawayDeposit',
            'chat_id' => $this->getChatId(),
            'giveaway_message_id' => $this->getGiveawayMessageId(),
        ];
    }
}
