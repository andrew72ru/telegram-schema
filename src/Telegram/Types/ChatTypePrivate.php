<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An ordinary chat with a user @user_id User identifier
 */
class ChatTypePrivate extends ChatType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
    ) {
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
            '@type' => 'chatTypePrivate',
            'user_id' => $this->getUserId(),
        ];
    }
}
