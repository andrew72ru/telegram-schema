<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes reactions, available in a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right.
 */
class SetChatAvailableReactions extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Reactions available in the chat. All explicitly specified emoji reactions must be active. In channel chats up to the chat's boost level custom emoji reactions can be explicitly specified */
        #[SerializedName('available_reactions')]
        private ChatAvailableReactions|null $availableReactions = null,
    ) {
    }

    /**
     * Get Identifier of the chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Reactions available in the chat. All explicitly specified emoji reactions must be active. In channel chats up to the chat's boost level custom emoji reactions can be explicitly specified.
     */
    public function getAvailableReactions(): ChatAvailableReactions|null
    {
        return $this->availableReactions;
    }

    /**
     * Set Reactions available in the chat. All explicitly specified emoji reactions must be active. In channel chats up to the chat's boost level custom emoji reactions can be explicitly specified.
     */
    public function setAvailableReactions(ChatAvailableReactions|null $availableReactions): self
    {
        $this->availableReactions = $availableReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatAvailableReactions',
            'chat_id' => $this->getChatId(),
            'available_reactions' => $this->getAvailableReactions(),
        ];
    }
}
