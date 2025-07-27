<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New message was received through a push notification.
 */
class NotificationTypeNewPushMessage extends NotificationType implements \JsonSerializable
{
    public function __construct(
        /** The message identifier. The message will not be available in the chat history, but the identifier can be used in viewMessages, or as a message to be replied in the same chat */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier of the sender of the message. Corresponding user or chat may be inaccessible */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Name of the sender */
        #[SerializedName('sender_name')]
        private string $senderName,
        /** True, if the message is outgoing */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
        /** Push message content */
        #[SerializedName('content')]
        private PushMessageContent|null $content = null,
    ) {
    }

    /**
     * Get The message identifier. The message will not be available in the chat history, but the identifier can be used in viewMessages, or as a message to be replied in the same chat.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The message identifier. The message will not be available in the chat history, but the identifier can be used in viewMessages, or as a message to be replied in the same chat.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier of the sender of the message. Corresponding user or chat may be inaccessible.
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of the message. Corresponding user or chat may be inaccessible.
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Name of the sender.
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * Set Name of the sender.
     */
    public function setSenderName(string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get True, if the message is outgoing.
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the message is outgoing.
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    /**
     * Get Push message content.
     */
    public function getContent(): PushMessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Push message content.
     */
    public function setContent(PushMessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationTypeNewPushMessage',
            'message_id' => $this->getMessageId(),
            'sender_id' => $this->getSenderId(),
            'sender_name' => $this->getSenderName(),
            'is_outgoing' => $this->getIsOutgoing(),
            'content' => $this->getContent(),
        ];
    }
}
