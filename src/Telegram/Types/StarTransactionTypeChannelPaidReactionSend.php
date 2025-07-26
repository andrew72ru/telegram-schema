<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sending of a paid reaction to a message in a channel chat by the current user; for regular users only
 */
class StarTransactionTypeChannelPaidReactionSend extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the reacted message; can be 0 or an identifier of a deleted message */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the channel chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the reacted message; can be 0 or an identifier of a deleted message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the reacted message; can be 0 or an identifier of a deleted message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelPaidReactionSend',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
