<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of users @total_count Approximate total number of users found @user_ids A list of user identifiers.
 */
class Users implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'users',
            'total_count' => $this->getTotalCount(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
