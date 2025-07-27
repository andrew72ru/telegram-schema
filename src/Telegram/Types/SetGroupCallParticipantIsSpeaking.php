<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that speaking state of a participant of an active group call has changed. Returns identifier of the participant if it is found.
 */
class SetGroupCallParticipantIsSpeaking extends MessageSender implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Group call participant's synchronization audio source identifier, or 0 for the current user */
        #[SerializedName('audio_source')]
        private int $audioSource,
        /** Pass true if the user is speaking */
        #[SerializedName('is_speaking')]
        private bool $isSpeaking,
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
     * Get Group call participant's synchronization audio source identifier, or 0 for the current user.
     */
    public function getAudioSource(): int
    {
        return $this->audioSource;
    }

    /**
     * Set Group call participant's synchronization audio source identifier, or 0 for the current user.
     */
    public function setAudioSource(int $audioSource): self
    {
        $this->audioSource = $audioSource;

        return $this;
    }

    /**
     * Get Pass true if the user is speaking.
     */
    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    /**
     * Set Pass true if the user is speaking.
     */
    public function setIsSpeaking(bool $isSpeaking): self
    {
        $this->isSpeaking = $isSpeaking;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setGroupCallParticipantIsSpeaking',
            'group_call_id' => $this->getGroupCallId(),
            'audio_source' => $this->getAudioSource(),
            'is_speaking' => $this->getIsSpeaking(),
        ];
    }
}
