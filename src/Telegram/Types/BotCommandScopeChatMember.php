<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A scope covering a member of a chat @chat_id Chat identifier @user_id User identifier
 */
class BotCommandScopeChatMember extends BotCommandScope implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('user_id')]
        private int $userId,
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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommandScopeChatMember',
            'chat_id' => $this->getChatId(),
            'user_id' => $this->getUserId(),
        ];
    }
}
