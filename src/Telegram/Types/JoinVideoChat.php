<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Joins an active video chat. Returns join response payload for tgcalls.
 */
class JoinVideoChat extends Text implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** Parameters to join the call */
        #[SerializedName('join_parameters')]
        private GroupCallJoinParameters|null $joinParameters = null,
        /** Invite hash as received from internalLinkTypeVideoChat */
        #[SerializedName('invite_hash')]
        private string $inviteHash,
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
     * Get Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only.
     */
    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    /**
     * Set Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only.
     */
    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get Parameters to join the call.
     */
    public function getJoinParameters(): GroupCallJoinParameters|null
    {
        return $this->joinParameters;
    }

    /**
     * Set Parameters to join the call.
     */
    public function setJoinParameters(GroupCallJoinParameters|null $joinParameters): self
    {
        $this->joinParameters = $joinParameters;

        return $this;
    }

    /**
     * Get Invite hash as received from internalLinkTypeVideoChat.
     */
    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    /**
     * Set Invite hash as received from internalLinkTypeVideoChat.
     */
    public function setInviteHash(string $inviteHash): self
    {
        $this->inviteHash = $inviteHash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'joinVideoChat',
            'group_call_id' => $this->getGroupCallId(),
            'participant_id' => $this->getParticipantId(),
            'join_parameters' => $this->getJoinParameters(),
            'invite_hash' => $this->getInviteHash(),
        ];
    }
}
