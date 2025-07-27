<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a participant of an active group call is muted, unmuted, or allowed to unmute themselves.
 */
class ToggleGroupCallParticipantIsMuted extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Participant identifier */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** Pass true to mute the user; pass false to unmute them */
        #[SerializedName('is_muted')]
        private bool $isMuted,
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
     * Get Participant identifier.
     */
    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    /**
     * Set Participant identifier.
     */
    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get Pass true to mute the user; pass false to unmute them.
     */
    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    /**
     * Set Pass true to mute the user; pass false to unmute them.
     */
    public function setIsMuted(bool $isMuted): self
    {
        $this->isMuted = $isMuted;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGroupCallParticipantIsMuted',
            'group_call_id' => $this->getGroupCallId(),
            'participant_id' => $this->getParticipantId(),
            'is_muted' => $this->getIsMuted(),
        ];
    }
}
