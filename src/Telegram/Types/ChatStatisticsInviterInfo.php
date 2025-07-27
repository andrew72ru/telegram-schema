<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains statistics about number of new members invited by a user.
 */
class ChatStatisticsInviterInfo implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of new members invited by the user */
        #[SerializedName('added_member_count')]
        private int $addedMemberCount,
    ) {
    }

    /**
     * Get User identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of new members invited by the user.
     */
    public function getAddedMemberCount(): int
    {
        return $this->addedMemberCount;
    }

    /**
     * Set Number of new members invited by the user.
     */
    public function setAddedMemberCount(int $addedMemberCount): self
    {
        $this->addedMemberCount = $addedMemberCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsInviterInfo',
            'user_id' => $this->getUserId(),
            'added_member_count' => $this->getAddedMemberCount(),
        ];
    }
}
