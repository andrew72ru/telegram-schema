<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a forum topic
 */
class ForumTopic implements \JsonSerializable
{
    public function __construct(
        /** Basic information about the topic */
        #[SerializedName('info')]
        private ForumTopicInfo|null $info = null,
        /** Last message in the topic; may be null if unknown */
        #[SerializedName('last_message')]
        private Message|null $lastMessage = null,
        /** A parameter used to determine order of the topic in the topic list. Topics must be sorted by the order in descending order */
        #[SerializedName('order')]
        private int $order,
        /** True, if the topic is pinned in the topic list */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** Number of unread messages in the topic */
        #[SerializedName('unread_count')]
        private int $unreadCount,
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
        /** A draft of a message in the topic; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
    ) {
    }

    /**
     * Get Basic information about the topic
     */
    public function getInfo(): ForumTopicInfo|null
    {
        return $this->info;
    }

    /**
     * Set Basic information about the topic
     */
    public function setInfo(ForumTopicInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get Last message in the topic; may be null if unknown
     */
    public function getLastMessage(): Message|null
    {
        return $this->lastMessage;
    }

    /**
     * Set Last message in the topic; may be null if unknown
     */
    public function setLastMessage(Message|null $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

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
     * Get Number of unread messages in the topic
     */
    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    /**
     * Set Number of unread messages in the topic
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
            '@type' => 'forumTopic',
            'info' => $this->getInfo(),
            'last_message' => $this->getLastMessage(),
            'order' => $this->getOrder(),
            'is_pinned' => $this->getIsPinned(),
            'unread_count' => $this->getUnreadCount(),
            'last_read_inbox_message_id' => $this->getLastReadInboxMessageId(),
            'last_read_outbox_message_id' => $this->getLastReadOutboxMessageId(),
            'unread_mention_count' => $this->getUnreadMentionCount(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
            'notification_settings' => $this->getNotificationSettings(),
            'draft_message' => $this->getDraftMessage(),
        ];
    }
}
