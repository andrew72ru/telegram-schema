<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS link to boost the specified supergroup or channel chat @chat_id Identifier of the chat
 */
class GetChatBoostLink extends ChatBoostLink implements \JsonSerializable
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
            '@type' => 'getChatBoostLink',
            'chat_id' => $this->getChatId(),
        ];
    }
}
