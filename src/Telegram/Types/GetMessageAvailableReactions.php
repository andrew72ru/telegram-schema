<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns reactions, which can be added to a message. The list can change after updateActiveEmojiReactions, updateChatAvailableReactions for the chat, or updateMessageInteractionInfo for the message
 */
class GetMessageAvailableReactions extends AvailableReactions implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Number of reaction per row, 5-25 */
        #[SerializedName('row_size')]
        private int $rowSize,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Number of reaction per row, 5-25
     */
    public function getRowSize(): int
    {
        return $this->rowSize;
    }

    /**
     * Set Number of reaction per row, 5-25
     */
    public function setRowSize(int $rowSize): self
    {
        $this->rowSize = $rowSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageAvailableReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'row_size' => $this->getRowSize(),
        ];
    }
}
