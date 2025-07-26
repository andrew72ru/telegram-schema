<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds the current user as a new member to a chat. Private and secret chats can't be joined using this method. May return an error with a message "INVITE_REQUEST_SENT" if only a join request was created @chat_id Chat identifier
 */
class JoinChat extends Ok implements \JsonSerializable
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
            '@type' => 'joinChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
