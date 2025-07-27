<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the personal chat of the current user @chat_id Identifier of the new personal chat; pass 0 to remove the chat. Use getSuitablePersonalChats to get suitable chats.
 */
class SetPersonalChat extends Ok implements \JsonSerializable
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
            '@type' => 'setPersonalChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
