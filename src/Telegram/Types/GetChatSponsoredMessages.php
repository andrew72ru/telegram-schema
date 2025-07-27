<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns sponsored messages to be shown in a chat; for channel chats and chats with bots only @chat_id Identifier of the chat.
 */
class GetChatSponsoredMessages extends SponsoredMessages implements \JsonSerializable
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
            '@type' => 'getChatSponsoredMessages',
            'chat_id' => $this->getChatId(),
        ];
    }
}
