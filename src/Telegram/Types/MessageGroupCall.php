<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about a group call not bound to a chat. If the message is incoming, the call isn't active, isn't missed, and has no duration,.
 */
class MessageGroupCall extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** True, if the call is active, i.e. the called user joined the call */
        #[SerializedName('is_active')]
        private bool $isActive,
        /** True, if the called user missed or declined the call */
        #[SerializedName('was_missed')]
        private bool $wasMissed,
        /** True, if the call is a video call */
        #[SerializedName('is_video')]
        private bool $isVideo,
        /** Call duration, in seconds; for left calls only */
        #[SerializedName('duration')]
        private int $duration,
        /** Identifiers of some other call participants */
        #[SerializedName('other_participant_ids')]
        private array|null $otherParticipantIds = null,
    ) {
    }

    /**
     * Get True, if the call is active, i.e. the called user joined the call.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set True, if the call is active, i.e. the called user joined the call.
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get True, if the called user missed or declined the call.
     */
    public function getWasMissed(): bool
    {
        return $this->wasMissed;
    }

    /**
     * Set True, if the called user missed or declined the call.
     */
    public function setWasMissed(bool $wasMissed): self
    {
        $this->wasMissed = $wasMissed;

        return $this;
    }

    /**
     * Get True, if the call is a video call.
     */
    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * Set True, if the call is a video call.
     */
    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get Call duration, in seconds; for left calls only.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Call duration, in seconds; for left calls only.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Identifiers of some other call participants.
     */
    public function getOtherParticipantIds(): array|null
    {
        return $this->otherParticipantIds;
    }

    /**
     * Set Identifiers of some other call participants.
     */
    public function setOtherParticipantIds(array|null $otherParticipantIds): self
    {
        $this->otherParticipantIds = $otherParticipantIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGroupCall',
            'is_active' => $this->getIsActive(),
            'was_missed' => $this->getWasMissed(),
            'is_video' => $this->getIsVideo(),
            'duration' => $this->getDuration(),
            'other_participant_ids' => $this->getOtherParticipantIds(),
        ];
    }
}
