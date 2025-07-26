<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes all pending paid reactions on a message @chat_id Identifier of the chat to which the message belongs @message_id Identifier of the message
 */
class RemovePendingPaidMessageReactions extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
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

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removePendingPaidMessageReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
