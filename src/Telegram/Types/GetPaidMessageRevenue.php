<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the total number of Telegram Stars received by the current user for paid messages from the given user @user_id Identifier of the user
 */
class GetPaidMessageRevenue extends StarCount implements \JsonSerializable
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
            '@type' => 'getPaidMessageRevenue',
            'user_id' => $this->getUserId(),
        ];
    }
}
