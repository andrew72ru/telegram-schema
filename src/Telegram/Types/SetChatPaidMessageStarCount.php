<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the amount of Telegram Stars that must be paid to send a message to a supergroup chat; requires can_restrict_members administrator right and supergroupFullInfo.can_enable_paid_messages.
 */
class SetChatPaidMessageStarCount extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The new number of Telegram Stars that must be paid for each message that is sent to the supergroup chat unless the sender is an administrator of the chat; 0-getOption("paid_message_star_count_max"). */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
    ) {
    }

    /**
     * Get Identifier of the supergroup chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the supergroup chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The new number of Telegram Stars that must be paid for each message that is sent to the supergroup chat unless the sender is an administrator of the chat; 0-getOption("paid_message_star_count_max")..
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The new number of Telegram Stars that must be paid for each message that is sent to the supergroup chat unless the sender is an administrator of the chat; 0-getOption("paid_message_star_count_max")..
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatPaidMessageStarCount',
            'chat_id' => $this->getChatId(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
        ];
    }
}
