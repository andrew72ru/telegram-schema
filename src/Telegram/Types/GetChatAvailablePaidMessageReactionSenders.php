<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of message sender identifiers, which can be used to send a paid reaction in a chat @chat_id Chat identifier
 */
class GetChatAvailablePaidMessageReactionSenders extends MessageSenders implements \JsonSerializable
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
            '@type' => 'getChatAvailablePaidMessageReactionSenders',
            'chat_id' => $this->getChatId(),
        ];
    }
}
