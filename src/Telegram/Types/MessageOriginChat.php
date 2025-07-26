<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was originally sent on behalf of a chat
 */
class MessageOriginChat extends MessageOrigin implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that originally sent the message */
        #[SerializedName('sender_chat_id')]
        private int $senderChatId,
        /** For messages originally sent by an anonymous chat administrator, original message author signature */
        #[SerializedName('author_signature')]
        private string $authorSignature,
    ) {
    }

    /**
     * Get Identifier of the chat that originally sent the message
     */
    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    /**
     * Set Identifier of the chat that originally sent the message
     */
    public function setSenderChatId(int $senderChatId): self
    {
        $this->senderChatId = $senderChatId;

        return $this;
    }

    /**
     * Get For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    /**
     * Set For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public function setAuthorSignature(string $authorSignature): self
    {
        $this->authorSignature = $authorSignature;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageOriginChat',
            'sender_chat_id' => $this->getSenderChatId(),
            'author_signature' => $this->getAuthorSignature(),
        ];
    }
}
