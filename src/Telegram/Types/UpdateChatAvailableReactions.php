<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat available reactions were changed @chat_id Chat identifier @available_reactions The new reactions, available in the chat
 */
class UpdateChatAvailableReactions extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('available_reactions')]
        private ChatAvailableReactions|null $availableReactions = null,
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

    public function getAvailableReactions(): ChatAvailableReactions|null
    {
        return $this->availableReactions;
    }

    public function setAvailableReactions(ChatAvailableReactions|null $availableReactions): self
    {
        $this->availableReactions = $availableReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatAvailableReactions',
            'chat_id' => $this->getChatId(),
            'available_reactions' => $this->getAvailableReactions(),
        ];
    }
}
