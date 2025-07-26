<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a chat to the list of recently found chats. The chat is added to the beginning of the list. If the chat is already in the list, it will be removed from the list first @chat_id Identifier of the chat to add
 */
class AddRecentlyFoundChat extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addRecentlyFoundChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
