<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Invites users to an active video chat. Sends a service message of the type messageInviteVideoChatParticipants to the chat bound to the group call.
 */
class InviteVideoChatParticipants extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** User identifiers. At most 10 users can be invited simultaneously */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    /**
     * Get Group call identifier.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get User identifiers. At most 10 users can be invited simultaneously.
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set User identifiers. At most 10 users can be invited simultaneously.
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteVideoChatParticipants',
            'group_call_id' => $this->getGroupCallId(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
