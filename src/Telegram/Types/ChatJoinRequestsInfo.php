<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about pending join requests for a chat @total_count Total number of pending join requests @user_ids Identifiers of at most 3 users sent the newest pending join requests
 */
class ChatJoinRequestsInfo implements \JsonSerializable
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
            '@type' => 'chatJoinRequestsInfo',
            'total_count' => $this->getTotalCount(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
