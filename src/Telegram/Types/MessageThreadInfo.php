<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a message thread
 */
class MessageThreadInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message thread belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message thread identifier, unique within the chat */
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
        /** Information about the message thread; may be null for forum topic threads */
        #[SerializedName('reply_info')]
        private MessageReplyInfo|null $replyInfo = null,
        /** Approximate number of unread messages in the message thread */
        #[SerializedName('unread_message_count')]
        private int $unreadMessageCount,
        /** The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id) */
        #[SerializedName('messages')]
        private array|null $messages = null,
        /** A draft of a message in the message thread; may be null if none */
        #[SerializedName('draft_message')]
        private DraftMessage|null $draftMessage = null,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message thread belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message thread belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message thread identifier, unique within the chat
     */
    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    /**
     * Set Message thread identifier, unique within the chat
     */
    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    /**
     * Get Information about the message thread; may be null for forum topic threads
     */
    public function getReplyInfo(): MessageReplyInfo|null
    {
        return $this->replyInfo;
    }

    /**
     * Set Information about the message thread; may be null for forum topic threads
     */
    public function setReplyInfo(MessageReplyInfo|null $replyInfo): self
    {
        $this->replyInfo = $replyInfo;

        return $this;
    }

    /**
     * Get Approximate number of unread messages in the message thread
     */
    public function getUnreadMessageCount(): int
    {
        return $this->unreadMessageCount;
    }

    /**
     * Set Approximate number of unread messages in the message thread
     */
    public function setUnreadMessageCount(int $unreadMessageCount): self
    {
        $this->unreadMessageCount = $unreadMessageCount;

        return $this;
    }

    /**
     * Get The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id)
     */
    public function getMessages(): array|null
    {
        return $this->messages;
    }

    /**
     * Set The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id)
     */
    public function setMessages(array|null $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get A draft of a message in the message thread; may be null if none
     */
    public function getDraftMessage(): DraftMessage|null
    {
        return $this->draftMessage;
    }

    /**
     * Set A draft of a message in the message thread; may be null if none
     */
    public function setDraftMessage(DraftMessage|null $draftMessage): self
    {
        $this->draftMessage = $draftMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageThreadInfo',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
            'reply_info' => $this->getReplyInfo(),
            'unread_message_count' => $this->getUnreadMessageCount(),
            'messages' => $this->getMessages(),
            'draft_message' => $this->getDraftMessage(),
        ];
    }
}
