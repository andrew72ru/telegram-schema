<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a chat administrator with a number of active and revoked chat invite links.
 */
class ChatInviteLinkCount implements \JsonSerializable
{
    public function __construct(
        /** Administrator's user identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of active invite links */
        #[SerializedName('invite_link_count')]
        private int $inviteLinkCount,
        /** Number of revoked invite links */
        #[SerializedName('revoked_invite_link_count')]
        private int $revokedInviteLinkCount,
    ) {
    }

    /**
     * Get Administrator's user identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Administrator's user identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of active invite links.
     */
    public function getInviteLinkCount(): int
    {
        return $this->inviteLinkCount;
    }

    /**
     * Set Number of active invite links.
     */
    public function setInviteLinkCount(int $inviteLinkCount): self
    {
        $this->inviteLinkCount = $inviteLinkCount;

        return $this;
    }

    /**
     * Get Number of revoked invite links.
     */
    public function getRevokedInviteLinkCount(): int
    {
        return $this->revokedInviteLinkCount;
    }

    /**
     * Set Number of revoked invite links.
     */
    public function setRevokedInviteLinkCount(int $revokedInviteLinkCount): self
    {
        $this->revokedInviteLinkCount = $revokedInviteLinkCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinkCount',
            'user_id' => $this->getUserId(),
            'invite_link_count' => $this->getInviteLinkCount(),
            'revoked_invite_link_count' => $this->getRevokedInviteLinkCount(),
        ];
    }
}
