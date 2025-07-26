<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A request to send a message has reached the Telegram server. This doesn't mean that the message will be sent successfully.
 */
class UpdateMessageSendAcknowledged extends Update implements \JsonSerializable
{
    public function __construct(
        /** The chat identifier of the sent message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** A temporary message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get The chat identifier of the sent message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat identifier of the sent message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get A temporary message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set A temporary message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageSendAcknowledged',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
