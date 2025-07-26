<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video chat participant volume level was changed @participant_id Identifier of the affected group call participant @volume_level New value of volume_level; 1-20000 in hundreds of percents
 */
class ChatEventVideoChatParticipantVolumeLevelChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        #[SerializedName('volume_level')]
        private int $volumeLevel,
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

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function setVolumeLevel(int $volumeLevel): self
    {
        $this->volumeLevel = $volumeLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventVideoChatParticipantVolumeLevelChanged',
            'participant_id' => $this->getParticipantId(),
            'volume_level' => $this->getVolumeLevel(),
        ];
    }
}
