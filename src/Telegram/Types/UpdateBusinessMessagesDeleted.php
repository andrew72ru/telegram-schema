<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Messages in a business account were deleted; for bots only.
 */
class UpdateBusinessMessagesDeleted extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the business connection */
        #[SerializedName('connection_id')]
        private string $connectionId,
        /** Identifier of a chat in the business account in which messages were deleted */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Unique message identifiers of the deleted messages */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
    ) {
    }

    /**
     * Get Unique identifier of the business connection.
     */
    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    /**
     * Set Unique identifier of the business connection.
     */
    public function setConnectionId(string $connectionId): self
    {
        $this->connectionId = $connectionId;

        return $this;
    }

    /**
     * Get Identifier of a chat in the business account in which messages were deleted.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat in the business account in which messages were deleted.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Unique message identifiers of the deleted messages.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Unique message identifiers of the deleted messages.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateBusinessMessagesDeleted',
            'connection_id' => $this->getConnectionId(),
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
