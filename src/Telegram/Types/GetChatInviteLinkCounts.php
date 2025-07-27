<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of chat administrators with number of their invite links. Requires owner privileges in the chat @chat_id Chat identifier.
 */
class GetChatInviteLinkCounts extends ChatInviteLinkCounts implements \JsonSerializable
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
            '@type' => 'getChatInviteLinkCounts',
            'chat_id' => $this->getChatId(),
        ];
    }
}
