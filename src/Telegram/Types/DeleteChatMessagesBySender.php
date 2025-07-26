<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages sent by the specified message sender in a chat. Supported only for supergroups; requires can_delete_messages administrator right @chat_id Chat identifier @sender_id Identifier of the sender of messages to delete
 */
class DeleteChatMessagesBySender extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
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

    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatMessagesBySender',
            'chat_id' => $this->getChatId(),
            'sender_id' => $this->getSenderId(),
        ];
    }
}
