<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video chat participant was muted or unmuted @participant_id Identifier of the affected group call participant @is_muted New value of is_muted
 */
class ChatEventVideoChatParticipantIsMutedToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        #[SerializedName('is_muted')]
        private bool $isMuted,
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

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function setIsMuted(bool $isMuted): self
    {
        $this->isMuted = $isMuted;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventVideoChatParticipantIsMutedToggled',
            'participant_id' => $this->getParticipantId(),
            'is_muted' => $this->getIsMuted(),
        ];
    }
}
