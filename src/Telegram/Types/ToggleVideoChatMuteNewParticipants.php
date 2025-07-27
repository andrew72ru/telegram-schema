<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether new participants of a video chat can be unmuted only by administrators of the video chat. Requires groupCall.can_toggle_mute_new_participants right.
 */
class ToggleVideoChatMuteNewParticipants extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** New value of the mute_new_participants setting */
        #[SerializedName('mute_new_participants')]
        private bool $muteNewParticipants,
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
     * Get New value of the mute_new_participants setting.
     */
    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    /**
     * Set New value of the mute_new_participants setting.
     */
    public function setMuteNewParticipants(bool $muteNewParticipants): self
    {
        $this->muteNewParticipants = $muteNewParticipants;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleVideoChatMuteNewParticipants',
            'group_call_id' => $this->getGroupCallId(),
            'mute_new_participants' => $this->getMuteNewParticipants(),
        ];
    }
}
