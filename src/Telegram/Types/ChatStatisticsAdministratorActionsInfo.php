<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains statistics about administrator actions done by a user.
 */
class ChatStatisticsAdministratorActionsInfo implements \JsonSerializable
{
    public function __construct(
        /** Administrator user identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of messages deleted by the administrator */
        #[SerializedName('deleted_message_count')]
        private int $deletedMessageCount,
        /** Number of users banned by the administrator */
        #[SerializedName('banned_user_count')]
        private int $bannedUserCount,
        /** Number of users restricted by the administrator */
        #[SerializedName('restricted_user_count')]
        private int $restrictedUserCount,
    ) {
    }

    /**
     * Get Administrator user identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Administrator user identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of messages deleted by the administrator.
     */
    public function getDeletedMessageCount(): int
    {
        return $this->deletedMessageCount;
    }

    /**
     * Set Number of messages deleted by the administrator.
     */
    public function setDeletedMessageCount(int $deletedMessageCount): self
    {
        $this->deletedMessageCount = $deletedMessageCount;

        return $this;
    }

    /**
     * Get Number of users banned by the administrator.
     */
    public function getBannedUserCount(): int
    {
        return $this->bannedUserCount;
    }

    /**
     * Set Number of users banned by the administrator.
     */
    public function setBannedUserCount(int $bannedUserCount): self
    {
        $this->bannedUserCount = $bannedUserCount;

        return $this;
    }

    /**
     * Get Number of users restricted by the administrator.
     */
    public function getRestrictedUserCount(): int
    {
        return $this->restrictedUserCount;
    }

    /**
     * Set Number of users restricted by the administrator.
     */
    public function setRestrictedUserCount(int $restrictedUserCount): self
    {
        $this->restrictedUserCount = $restrictedUserCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatStatisticsAdministratorActionsInfo',
            'user_id' => $this->getUserId(),
            'deleted_message_count' => $this->getDeletedMessageCount(),
            'banned_user_count' => $this->getBannedUserCount(),
            'restricted_user_count' => $this->getRestrictedUserCount(),
        ];
    }
}
