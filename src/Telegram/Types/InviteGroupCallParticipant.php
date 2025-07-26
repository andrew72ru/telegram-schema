<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Invites a user to an active group call; for group calls not bound to a chat only. Sends a service message of the type messageGroupCall.
 */
class InviteGroupCallParticipant extends InviteGroupCallParticipantResult implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Pass true if the group call is a video call */
        #[SerializedName('is_video')]
        private bool $isVideo,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Pass true if the group call is a video call
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * Set Pass true if the group call is a video call
     */
    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteGroupCallParticipant',
            'group_call_id' => $this->getGroupCallId(),
            'user_id' => $this->getUserId(),
            'is_video' => $this->getIsVideo(),
        ];
    }
}
