<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data in userFullInfo has been changed @user_id User identifier @user_full_info New full information about the user.
 */
class UpdateUserFullInfo extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('user_full_info')]
        private UserFullInfo|null $userFullInfo = null,
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

    public function getUserFullInfo(): UserFullInfo|null
    {
        return $this->userFullInfo;
    }

    public function setUserFullInfo(UserFullInfo|null $userFullInfo): self
    {
        $this->userFullInfo = $userFullInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUserFullInfo',
            'user_id' => $this->getUserId(),
            'user_full_info' => $this->getUserFullInfo(),
        ];
    }
}
