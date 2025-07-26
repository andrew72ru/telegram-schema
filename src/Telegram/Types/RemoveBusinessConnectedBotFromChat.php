<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes the connected business bot from a specific chat by adding the chat to businessRecipients.excluded_chat_ids @chat_id Chat identifier
 */
class RemoveBusinessConnectedBotFromChat extends Ok implements \JsonSerializable
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
            '@type' => 'removeBusinessConnectedBotFromChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
