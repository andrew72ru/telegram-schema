<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Incoming messages were read or the number of unread messages has been changed @chat_id Chat identifier @last_read_inbox_message_id Identifier of the last read incoming message @unread_count The number of unread messages left in the chat
 */
class UpdateChatReadInbox extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('last_read_inbox_message_id')]
        private int $lastReadInboxMessageId,
        #[SerializedName('unread_count')]
        private int $unreadCount,
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

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function setLastReadInboxMessageId(int $lastReadInboxMessageId): self
    {
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;

        return $this;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatReadInbox',
            'chat_id' => $this->getChatId(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'unread_count' => $this->getUnreadCount(),
        ];
    }
}
