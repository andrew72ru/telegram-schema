<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a topic in a channel direct messages chat administered by the current user
 */
class DirectMessagesChatTopic implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the topic belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Unique topic identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user or chat that sends the messages to the topic */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order */
        #[SerializedName('order')]
        private int $order,
        /** True, if the other party can send unpaid messages even if the chat has paid messages enabled */
        #[SerializedName('can_send_unpaid_messages')]
        private bool $canSendUnpaidMessages,
        /** True, if the forum topic is marked as unread */
        #[SerializedName('is_marked_as_unread')]
        private bool $isMarkedAsUnread,
        /** Number of unread messages in the chat */
        #[SerializedName('unread_count')]
        private int $unreadCount,
        /** Identifier of the last read incoming message */
        #[SerializedName('last_read_inbox_message_id')]
        private int $lastReadInboxMessageId,
        /** Identifier of the last read outgoing message */
        #[SerializedName('last_read_outbox_message_id')]
        private int $lastReadOutboxMessageId,
        /** Number of messages with unread reactions in the chat */
        #[SerializedName('unread_reaction_count')]
        private int $unreadReactionCount,
        /** Last message in the topic; may be null if none or unknown */
        #[SerializedName('last_message')]
        private Message|null $lastMessage = null,
        /** A draft of a message in the topic; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
    ) {
    }

    /**
     * Get Identifier of the chat to which the topic belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the topic belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Unique topic identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique topic identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user or chat that sends the messages to the topic
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the user or chat that sends the messages to the topic
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Set A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order
     */
    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get True, if the other party can send unpaid messages even if the chat has paid messages enabled
     */
    public function getCanSendUnpaidMessages(): bool
    {
        return $this->canSendUnpaidMessages;
    }

    /**
     * Set True, if the other party can send unpaid messages even if the chat has paid messages enabled
     */
    public function setCanSendUnpaidMessages(bool $canSendUnpaidMessages): self
    {
        $this->canSendUnpaidMessages = $canSendUnpaidMessages;

        return $this;
    }

    /**
     * Get True, if the forum topic is marked as unread
     */
    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    /**
     * Set True, if the forum topic is marked as unread
     */
    public function setIsMarkedAsUnread(bool $isMarkedAsUnread): self
    {
        $this->isMarkedAsUnread = $isMarkedAsUnread;

        return $this;
    }

    /**
     * Get Number of unread messages in the chat
     */
    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    /**
     * Set Number of unread messages in the chat
     */
    public function setUnreadCount(int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * Get Identifier of the last read incoming message
     */
    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    /**
     * Set Identifier of the last read incoming message
     */
    public function setLastReadInboxMessageId(int $lastReadInboxMessageId): self
    {
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;

        return $this;
    }

    /**
     * Get Identifier of the last read outgoing message
     */
    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    /**
     * Set Identifier of the last read outgoing message
     */
    public function setLastReadOutboxMessageId(int $lastReadOutboxMessageId): self
    {
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;

        return $this;
    }

    /**
     * Get Number of messages with unread reactions in the chat
     */
    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    /**
     * Set Number of messages with unread reactions in the chat
     */
    public function setUnreadReactionCount(int $unreadReactionCount): self
    {
        $this->unreadReactionCount = $unreadReactionCount;

        return $this;
    }

    /**
     * Get Last message in the topic; may be null if none or unknown
     */
    public function getLastMessage(): Message|null
    {
        return $this->lastMessage;
    }

    /**
     * Set Last message in the topic; may be null if none or unknown
     */
    public function setLastMessage(Message|null $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * Get A draft of a message in the topic; may be null if none
     */
    public function getDraftMessage(): DraftMessage|null
    {
        return $this->draftMessage;
    }

    /**
     * Set A draft of a message in the topic; may be null if none
     */
    public function setDraftMessage(DraftMessage|null $draftMessage): self
    {
        $this->draftMessage = $draftMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'directMessagesChatTopic',
            'chat_id' => $this->getChatId(),
            'id' => $this->getId(),
            'sender_id' => $this->getSenderId(),
            'order' => $this->getOrder(),
            'can_send_unpaid_messages' => $this->getCanSendUnpaidMessages(),
            'is_marked_as_unread' => $this->getIsMarkedAsUnread(),
            'unread_count' => $this->getUnreadCount(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
            'last_message' => $this->getLastMessage(),
            'draft_message' => $this->getDraftMessage(),
        ];
    }
}
