<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about a topic in a forum chat was changed
 */
class UpdateForumTopic extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier of the topic */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** True, if the topic is pinned in the topic list */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** Identifier of the last read incoming message */
        #[SerializedName('last_read_inbox_message_id')]
        private int $lastReadInboxMessageId,
        /** Identifier of the last read outgoing message */
        #[SerializedName('last_read_outbox_message_id')]
        private int $lastReadOutboxMessageId,
        /** Number of unread messages with a mention/reply in the topic */
        #[SerializedName('unread_mention_count')]
        private int $unreadMentionCount,
        /** Number of messages with unread reactions in the topic */
        #[SerializedName('unread_reaction_count')]
        private int $unreadReactionCount,
        /** Notification settings for the topic */
        #[SerializedName('notification_settings')]
        private ChatNotificationSettings|null $notificationSettings = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message thread identifier of the topic
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier of the topic
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get True, if the topic is pinned in the topic list
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the topic is pinned in the topic list
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

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
     * Get Number of unread messages with a mention/reply in the topic
     */
    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    /**
     * Set Number of unread messages with a mention/reply in the topic
     */
    public function setUnreadMentionCount(int $unreadMentionCount): self
    {
        $this->unreadMentionCount = $unreadMentionCount;

        return $this;
    }

    /**
     * Get Number of messages with unread reactions in the topic
     */
    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    /**
     * Set Number of messages with unread reactions in the topic
     */
    public function setUnreadReactionCount(int $unreadReactionCount): self
    {
        $this->unreadReactionCount = $unreadReactionCount;

        return $this;
    }

    /**
     * Get Notification settings for the topic
     */
    public function getNotificationSettings(): ChatNotificationSettings|null
    {
        return $this->notificationSettings;
    }

    /**
     * Set Notification settings for the topic
     */
    public function setNotificationSettings(ChatNotificationSettings|null $notificationSettings): self
    {
        $this->notificationSettings = $notificationSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateForumTopic',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'is_pinned' => $this->getIsPinned(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
            'unread_mention_count' => $this->getUnreadMentionCount(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
            'notification_settings' => $this->getNotificationSettings(),
        ];
    }
}
