<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about replies to a message
 */
class MessageReplyInfo implements \JsonSerializable
{
    public function __construct(
        /** Number of times the message was directly or indirectly replied */
        #[SerializedName('reply_count')]
        private int $replyCount,
        /** Identifiers of at most 3 recent repliers to the message; available in channels with a discussion supergroup. The users and chats are expected to be inaccessible: only their photo and name will be available */
        #[SerializedName('recent_replier_ids')]
        private array|null $recentReplierIds = null,
        /** Identifier of the last read incoming reply to the message */
        #[SerializedName('last_read_inbox_message_id')]
        private int $lastReadInboxMessageId,
        /** Identifier of the last read outgoing reply to the message */
        #[SerializedName('last_read_outbox_message_id')]
        private int $lastReadOutboxMessageId,
        /** Identifier of the last reply to the message */
        #[SerializedName('last_message_id')]
        private int $lastMessageId,
    ) {
    }

    /**
     * Get Number of times the message was directly or indirectly replied
     */
    public function getReplyCount(): int
    {
        return $this->replyCount;
    }

    /**
     * Set Number of times the message was directly or indirectly replied
     */
    public function setReplyCount(int $replyCount): self
    {
        $this->replyCount = $replyCount;

        return $this;
    }

    /**
     * Get Identifiers of at most 3 recent repliers to the message; available in channels with a discussion supergroup. The users and chats are expected to be inaccessible: only their photo and name will be available
     */
    public function getRecentReplierIds(): array|null
    {
        return $this->recentReplierIds;
    }

    /**
     * Set Identifiers of at most 3 recent repliers to the message; available in channels with a discussion supergroup. The users and chats are expected to be inaccessible: only their photo and name will be available
     */
    public function setRecentReplierIds(array|null $recentReplierIds): self
    {
        $this->recentReplierIds = $recentReplierIds;

        return $this;
    }

    /**
     * Get Identifier of the last read incoming reply to the message
     */
    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    /**
     * Set Identifier of the last read incoming reply to the message
     */
    public function setLastReadInboxMessageId(int $lastReadInboxMessageId): self
    {
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;

        return $this;
    }

    /**
     * Get Identifier of the last read outgoing reply to the message
     */
    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    /**
     * Set Identifier of the last read outgoing reply to the message
     */
    public function setLastReadOutboxMessageId(int $lastReadOutboxMessageId): self
    {
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;

        return $this;
    }

    /**
     * Get Identifier of the last reply to the message
     */
    public function getLastMessageId(): int
    {
        return $this->lastMessageId;
    }

    /**
     * Set Identifier of the last reply to the message
     */
    public function setLastMessageId(int $lastMessageId): self
    {
        $this->lastMessageId = $lastMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReplyInfo',
            'reply_count' => $this->getReplyCount(),
            'recent_replier_ids' => $this->getRecentReplierIds(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
            'last_message_id' => $this->getLastMessageId(),
        ];
    }
}
