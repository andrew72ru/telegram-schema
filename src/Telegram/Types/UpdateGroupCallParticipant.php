<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about a group call participant was changed. The updates are sent only after the group call is received through getGroupCall and only if the call is joined or being joined.
 */
class UpdateGroupCallParticipant extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the group call */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** New data about the participant */
        #[SerializedName('participant')]
        private GroupCallParticipant|null $participant = null,
    ) {
    }

    /**
     * Get Identifier of the group call.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Identifier of the group call.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get New data about the participant.
     */
    public function getParticipant(): GroupCallParticipant|null
    {
        return $this->participant;
    }

    /**
     * Set New data about the participant.
     */
    public function setParticipant(GroupCallParticipant|null $participant): self
    {
        $this->participant = $participant;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateGroupCallParticipant',
            'group_call_id' => $this->getGroupCallId(),
            'participant' => $this->getParticipant(),
        ];
    }
}
