<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes volume level of a participant of an active group call. If the current user can manage the group call or is the owner of the group call,
 */
class SetGroupCallParticipantVolumeLevel extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Participant identifier */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** New participant's volume level; 1-20000 in hundreds of percents */
        #[SerializedName('volume_level')]
        private int $volumeLevel,
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
     * Get Participant identifier
     */
    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    /**
     * Set Participant identifier
     */
    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get New participant's volume level; 1-20000 in hundreds of percents
     */
    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    /**
     * Set New participant's volume level; 1-20000 in hundreds of percents
     */
    public function setVolumeLevel(int $volumeLevel): self
    {
        $this->volumeLevel = $volumeLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setGroupCallParticipantVolumeLevel',
            'group_call_id' => $this->getGroupCallId(),
            'participant_id' => $this->getParticipantId(),
            'volume_level' => $this->getVolumeLevel(),
        ];
    }
}
