<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right @chat_id Identifier of the chat @param_description New chat description; 0-255 characters.
 */
class SetChatDescription extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right @chat_id Identifier of the chat @param_description New chat description; 0-255 characters */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right @chat_id Identifier of the chat @param_description New chat description; 0-255 characters.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Changes information about a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right @chat_id Identifier of the chat @param_description New chat description; 0-255 characters.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatDescription',
            'chat_id' => $this->getChatId(),
            'description' => $this->getDescription(),
        ];
    }
}
