<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A user with Telegram Premium subscription or gifted Telegram Premium boosted the chat.
 */
class ChatBoostSourcePremium extends ChatBoostSource implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user */
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    /**
     * Get Identifier of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostSourcePremium',
            'user_id' => $this->getUserId(),
        ];
    }
}
