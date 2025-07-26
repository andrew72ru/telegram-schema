<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns all scheduled messages in a chat. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id) @chat_id Chat identifier
 */
class GetChatScheduledMessages extends Messages implements \JsonSerializable
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
            '@type' => 'getChatScheduledMessages',
            'chat_id' => $this->getChatId(),
        ];
    }
}
