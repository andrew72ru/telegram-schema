<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the last message from which a new message was forwarded last time
 */
class ForwardSource implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message that was forwarded belonged; may be 0 if unknown */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message; may be 0 if unknown */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier of the sender of the message; may be null if unknown or the new message was forwarded not to Saved Messages */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Name of the sender of the message if the sender is hidden by their privacy settings */
        #[SerializedName('sender_name')]
        private string $senderName,
        /** Point in time (Unix timestamp) when the message is sent; 0 if unknown */
        #[SerializedName('date')]
        private int $date,
        /** True, if the message that was forwarded is outgoing; always false if sender is unknown */
        #[SerializedName('is_outgoing')]
        private bool $isOutgoing,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message that was forwarded belonged; may be 0 if unknown
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message that was forwarded belonged; may be 0 if unknown
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message; may be 0 if unknown
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message; may be 0 if unknown
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier of the sender of the message; may be null if unknown or the new message was forwarded not to Saved Messages
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of the sender of the message; may be null if unknown or the new message was forwarded not to Saved Messages
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Name of the sender of the message if the sender is hidden by their privacy settings
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * Set Name of the sender of the message if the sender is hidden by their privacy settings
     */
    public function setSenderName(string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message is sent; 0 if unknown
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the message is sent; 0 if unknown
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get True, if the message that was forwarded is outgoing; always false if sender is unknown
     */
    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    /**
     * Set True, if the message that was forwarded is outgoing; always false if sender is unknown
     */
    public function setIsOutgoing(bool $isOutgoing): self
    {
        $this->isOutgoing = $isOutgoing;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'forwardSource',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'sender_id' => $this->getSenderId(),
            'sender_name' => $this->getSenderName(),
            'date' => $this->getDate(),
            'is_outgoing' => $this->getIsOutgoing(),
        ];
    }
}
