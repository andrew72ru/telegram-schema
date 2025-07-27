<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user went online or offline @user_id User identifier @status New status of the user.
 */
class UpdateUserStatus extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('status')]
        private UserStatus|null $status = null,
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

    public function getStatus(): UserStatus|null
    {
        return $this->status;
    }

    public function setStatus(UserStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUserStatus',
            'user_id' => $this->getUserId(),
            'status' => $this->getStatus(),
        ];
    }
}
