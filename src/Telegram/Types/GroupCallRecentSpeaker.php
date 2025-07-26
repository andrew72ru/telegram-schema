<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a recently speaking participant in a group call @participant_id Group call participant identifier @is_speaking True, is the user has spoken recently
 */
class GroupCallRecentSpeaker implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        #[SerializedName('is_speaking')]
        private bool $isSpeaking,
    ) {
    }

    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function setIsSpeaking(bool $isSpeaking): self
    {
        $this->isSpeaking = $isSpeaking;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallRecentSpeaker',
            'participant_id' => $this->getParticipantId(),
            'is_speaking' => $this->getIsSpeaking(),
        ];
    }
}
