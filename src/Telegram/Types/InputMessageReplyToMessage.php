<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message to be replied in the same chat and forum topic
 */
class InputMessageReplyToMessage extends InputMessageReplyTo implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the message to be replied in the same chat and forum topic. A message can be replied in the same chat and forum topic only if messageProperties.can_be_replied */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Quote from the message to be replied; pass null if none. Must always be null for replies in secret chats */
        #[SerializedName('quote')]
        private InputTextQuote|null $quote = null,
    ) {
    }

    /**
     * Get The identifier of the message to be replied in the same chat and forum topic. A message can be replied in the same chat and forum topic only if messageProperties.can_be_replied
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The identifier of the message to be replied in the same chat and forum topic. A message can be replied in the same chat and forum topic only if messageProperties.can_be_replied
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Quote from the message to be replied; pass null if none. Must always be null for replies in secret chats
     */
    public function getQuote(): InputTextQuote|null
    {
        return $this->quote;
    }

    /**
     * Set Quote from the message to be replied; pass null if none. Must always be null for replies in secret chats
     */
    public function setQuote(InputTextQuote|null $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageReplyToMessage',
            'message_id' => $this->getMessageId(),
            'quote' => $this->getQuote(),
        ];
    }
}
