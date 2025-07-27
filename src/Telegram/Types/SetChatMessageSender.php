<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Selects a message sender to send messages in a chat @chat_id Chat identifier @message_sender_id New message sender for the chat.
 */
class SetChatMessageSender extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_sender_id')]
        private MessageSender|null $messageSenderId = null,
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

    public function getMessageSenderId(): MessageSender|null
    {
        return $this->messageSenderId;
    }

    public function setMessageSenderId(MessageSender|null $messageSenderId): self
    {
        $this->messageSenderId = $messageSenderId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatMessageSender',
            'chat_id' => $this->getChatId(),
            'message_sender_id' => $this->getMessageSenderId(),
        ];
    }
}
