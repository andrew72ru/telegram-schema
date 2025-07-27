<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message replied by a given message.
 */
class MessageReplyToMessage extends MessageReplyTo implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the chat to which the message belongs; may be 0 if the replied message is in unknown chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The identifier of the message; may be 0 if the replied message is in unknown chat */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Chosen quote from the replied message; may be null if none */
        #[SerializedName('quote')]
        private TextQuote|null $quote = null,
        /** Information about origin of the message if the message was from another chat or topic; may be null for messages from the same chat */
        #[SerializedName('origin')]
        private MessageOrigin|null $origin = null,
        /** Point in time (Unix timestamp) when the message was sent if the message was from another chat or topic; 0 for messages from the same chat */
        #[SerializedName('origin_send_date')]
        private int $originSendDate,
        /** Media content of the message if the message was from another chat or topic; may be null for messages from the same chat and messages without media. */
        #[SerializedName('content')]
        private MessageContent|null $content = null,
    ) {
    }

    /**
     * Get The identifier of the chat to which the message belongs; may be 0 if the replied message is in unknown chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The identifier of the chat to which the message belongs; may be 0 if the replied message is in unknown chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The identifier of the message; may be 0 if the replied message is in unknown chat.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The identifier of the message; may be 0 if the replied message is in unknown chat.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Chosen quote from the replied message; may be null if none.
     */
    public function getQuote(): TextQuote|null
    {
        return $this->quote;
    }

    /**
     * Set Chosen quote from the replied message; may be null if none.
     */
    public function setQuote(TextQuote|null $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get Information about origin of the message if the message was from another chat or topic; may be null for messages from the same chat.
     */
    public function getOrigin(): MessageOrigin|null
    {
        return $this->origin;
    }

    /**
     * Set Information about origin of the message if the message was from another chat or topic; may be null for messages from the same chat.
     */
    public function setOrigin(MessageOrigin|null $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was sent if the message was from another chat or topic; 0 for messages from the same chat.
     */
    public function getOriginSendDate(): int
    {
        return $this->originSendDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was sent if the message was from another chat or topic; 0 for messages from the same chat.
     */
    public function setOriginSendDate(int $originSendDate): self
    {
        $this->originSendDate = $originSendDate;

        return $this;
    }

    /**
     * Get Media content of the message if the message was from another chat or topic; may be null for messages from the same chat and messages without media..
     */
    public function getContent(): MessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Media content of the message if the message was from another chat or topic; may be null for messages from the same chat and messages without media..
     */
    public function setContent(MessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReplyToMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'quote' => $this->getQuote(),
            'origin' => $this->getOrigin(),
            'origin_send_date' => $this->getOriginSendDate(),
            'content' => $this->getContent(),
        ];
    }
}
