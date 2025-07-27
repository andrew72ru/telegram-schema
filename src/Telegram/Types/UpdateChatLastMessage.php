<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The last message of a chat was changed.
 */
class UpdateChatLastMessage extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The new last message in the chat; may be null if the last message became unknown. While the last message is unknown, new messages can be added to the chat without corresponding updateNewMessage update */
        #[SerializedName('last_message')]
        private Message|null $lastMessage = null,
        /** The new chat positions in the chat lists */
        #[SerializedName('positions')]
        private array|null $positions = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The new last message in the chat; may be null if the last message became unknown. While the last message is unknown, new messages can be added to the chat without corresponding updateNewMessage update.
     */
    public function getLastMessage(): Message|null
    {
        return $this->lastMessage;
    }

    /**
     * Set The new last message in the chat; may be null if the last message became unknown. While the last message is unknown, new messages can be added to the chat without corresponding updateNewMessage update.
     */
    public function setLastMessage(Message|null $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * Get The new chat positions in the chat lists.
     */
    public function getPositions(): array|null
    {
        return $this->positions;
    }

    /**
     * Set The new chat positions in the chat lists.
     */
    public function setPositions(array|null $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatLastMessage',
            'chat_id' => $this->getChatId(),
            'last_message' => $this->getLastMessage(),
            'positions' => $this->getPositions(),
        ];
    }
}
