<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an existing chat corresponding to a given user @user_id User identifier @force Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
 */
class CreatePrivateChat extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('force')]
        private bool $force,
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

    public function getForce(): bool
    {
        return $this->force;
    }

    public function setForce(bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createPrivateChat',
            'user_id' => $this->getUserId(),
            'force' => $this->getForce(),
        ];
    }
}
