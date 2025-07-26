<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was originally a post in a channel
 */
class MessageOriginChannel extends MessageOrigin implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat to which the message was originally sent */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier of the original message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Original post author signature */
        #[SerializedName('author_signature')]
        private string $authorSignature,
    ) {
    }

    /**
     * Get Identifier of the channel chat to which the message was originally sent
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat to which the message was originally sent
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier of the original message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier of the original message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Original post author signature
     */
    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    /**
     * Set Original post author signature
     */
    public function setAuthorSignature(string $authorSignature): self
    {
        $this->authorSignature = $authorSignature;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageOriginChannel',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'author_signature' => $this->getAuthorSignature(),
        ];
    }
}
