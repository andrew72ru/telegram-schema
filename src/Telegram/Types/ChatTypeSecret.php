<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A secret chat with a user @secret_chat_id Secret chat identifier @user_id User identifier of the other user in the secret chat
 */
class ChatTypeSecret extends ChatType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('secret_chat_id')]
        private int $secretChatId,
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }

    public function setSecretChatId(int $secretChatId): self
    {
        $this->secretChatId = $secretChatId;

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
            '@type' => 'chatTypeSecret',
            'secret_chat_id' => $this->getSecretChatId(),
            'user_id' => $this->getUserId(),
        ];
    }
}
