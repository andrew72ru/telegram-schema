<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The position of a chat in a chat list has changed. An updateChatLastMessage or updateChatDraftMessage update might be sent instead of the update.
 */
class UpdateChatPosition extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New chat position. If new order is 0, then the chat needs to be removed from the list */
        #[SerializedName('position')]
        private ChatPosition|null $position = null,
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
     * Get New chat position. If new order is 0, then the chat needs to be removed from the list.
     */
    public function getPosition(): ChatPosition|null
    {
        return $this->position;
    }

    /**
     * Set New chat position. If new order is 0, then the chat needs to be removed from the list.
     */
    public function setPosition(ChatPosition|null $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatPosition',
            'chat_id' => $this->getChatId(),
            'position' => $this->getPosition(),
        ];
    }
}
