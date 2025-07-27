<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message to be replied that is from a different chat or a forum topic; not supported in secret chats.
 */
class InputMessageReplyToExternalMessage extends InputMessageReplyTo implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the chat to which the message to be replied belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The identifier of the message to be replied in the specified chat. A message can be replied in another chat or forum topic only if messageProperties.can_be_replied_in_another_chat */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Quote from the message to be replied; pass null if none */
        #[SerializedName('quote')]
        private InputTextQuote|null $quote = null,
    ) {
    }

    /**
     * Get The identifier of the chat to which the message to be replied belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The identifier of the chat to which the message to be replied belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The identifier of the message to be replied in the specified chat. A message can be replied in another chat or forum topic only if messageProperties.can_be_replied_in_another_chat.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The identifier of the message to be replied in the specified chat. A message can be replied in another chat or forum topic only if messageProperties.can_be_replied_in_another_chat.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Quote from the message to be replied; pass null if none.
     */
    public function getQuote(): InputTextQuote|null
    {
        return $this->quote;
    }

    /**
     * Set Quote from the message to be replied; pass null if none.
     */
    public function setQuote(InputTextQuote|null $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageReplyToExternalMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'quote' => $this->getQuote(),
        ];
    }
}
