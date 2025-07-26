<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A scope covering all members of a chat @chat_id Chat identifier
 */
class BotCommandScopeChat extends BotCommandScope implements \JsonSerializable
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
            '@type' => 'botCommandScopeChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
