<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of group call participants that can send and receive encrypted call data has changed; for group calls not bound to a chat only
 */
class UpdateGroupCallParticipants extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the group call */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** New list of group call participant user identifiers. The identifiers may be invalid or the corresponding users may be unknown. */
        #[SerializedName('participant_user_ids')]
        private array|null $participantUserIds = null,
    ) {
    }

    /**
     * Get Identifier of the group call
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Identifier of the group call
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get New list of group call participant user identifiers. The identifiers may be invalid or the corresponding users may be unknown.
     */
    public function getParticipantUserIds(): array|null
    {
        return $this->participantUserIds;
    }

    /**
     * Set New list of group call participant user identifiers. The identifiers may be invalid or the corresponding users may be unknown.
     */
    public function setParticipantUserIds(array|null $participantUserIds): self
    {
        $this->participantUserIds = $participantUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateGroupCallParticipants',
            'group_call_id' => $this->getGroupCallId(),
            'participant_user_ids' => $this->getParticipantUserIds(),
        ];
    }
}
