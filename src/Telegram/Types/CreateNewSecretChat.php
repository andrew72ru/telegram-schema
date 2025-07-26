<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new secret chat. Returns the newly created chat @user_id Identifier of the target user
 */
class CreateNewSecretChat extends Chat implements \JsonSerializable
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
            '@type' => 'createNewSecretChat',
            'user_id' => $this->getUserId(),
        ];
    }
}
