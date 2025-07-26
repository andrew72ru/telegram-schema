<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a live location was viewed. When the update is received, the application is expected to update the live location
 */
class UpdateMessageLiveLocationViewed extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the live location message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message with live location */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the chat with the live location message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the live location message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message with live location
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message with live location
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageLiveLocationViewed',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
