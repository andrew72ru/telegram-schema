<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sending of a paid message; for regular users only @chat_id Identifier of the chat that received the payment @message_count Number of sent paid messages.
 */
class StarTransactionTypePaidMessageSend extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_count')]
        private int $messageCount,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypePaidMessageSend',
            'chat_id' => $this->getChatId(),
            'message_count' => $this->getMessageCount(),
        ];
    }
}
