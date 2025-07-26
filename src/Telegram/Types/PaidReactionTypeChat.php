<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A paid reaction on behalf of an owned chat @chat_id Identifier of the chat
 */
class PaidReactionTypeChat extends PaidReactionType implements \JsonSerializable
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
            '@type' => 'paidReactionTypeChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
