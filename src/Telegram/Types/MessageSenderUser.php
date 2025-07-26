<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was sent by a known user @user_id Identifier of the user that sent the message
 */
class MessageSenderUser extends MessageSender implements \JsonSerializable
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
            '@type' => 'messageSenderUser',
            'user_id' => $this->getUserId(),
        ];
    }
}
