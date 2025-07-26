<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Declines an invitation to an active group call via messageGroupCall. Can be called both by the sender and the receiver of the invitation
 */
class DeclineGroupCallInvitation extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message of the type messageGroupCall */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the chat with the message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message of the type messageGroupCall
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message of the type messageGroupCall
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'declineGroupCallInvitation',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
