<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a newest pinned message in the chat. Returns a 404 error if the message doesn't exist @chat_id Identifier of the chat the message belongs to.
 */
class GetChatPinnedMessage extends Message implements \JsonSerializable
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
            '@type' => 'getChatPinnedMessage',
            'chat_id' => $this->getChatId(),
        ];
    }
}
