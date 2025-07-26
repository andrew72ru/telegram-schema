<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes the current user from chat members. Private and secret chats can't be left using this method @chat_id Chat identifier
 */
class LeaveChat extends Ok implements \JsonSerializable
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
            '@type' => 'leaveChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
