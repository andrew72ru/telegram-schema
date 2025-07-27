<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Outgoing messages were read @chat_id Chat identifier @last_read_outbox_message_id Identifier of last read outgoing message.
 */
class UpdateChatReadOutbox extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('last_read_outbox_message_id')]
        private int $lastReadOutboxMessageId,
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

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function setLastReadOutboxMessageId(int $lastReadOutboxMessageId): self
    {
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatReadOutbox',
            'chat_id' => $this->getChatId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
        ];
    }
}
