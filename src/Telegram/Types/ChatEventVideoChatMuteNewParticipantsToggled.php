<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The mute_new_participants setting of a video chat was toggled @mute_new_participants New value of the mute_new_participants setting
 */
class ChatEventVideoChatMuteNewParticipantsToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('mute_new_participants')]
        private bool $muteNewParticipants,
    ) {
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function setMuteNewParticipants(bool $muteNewParticipants): self
    {
        $this->muteNewParticipants = $muteNewParticipants;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventVideoChatMuteNewParticipantsToggled',
            'mute_new_participants' => $this->getMuteNewParticipants(),
        ];
    }
}
