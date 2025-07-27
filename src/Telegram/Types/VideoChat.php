<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a video chat, i.e. a group call bound to a chat.
 */
class VideoChat implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier of an active video chat; 0 if none. Full information about the video chat can be received through the method getGroupCall */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** True, if the video chat has participants */
        #[SerializedName('has_participants')]
        private bool $hasParticipants,
        /** Default group call participant identifier to join the video chat; may be null */
        #[SerializedName('default_participant_id')]
        private MessageSender|null $defaultParticipantId = null,
    ) {
    }

    /**
     * Get Group call identifier of an active video chat; 0 if none. Full information about the video chat can be received through the method getGroupCall.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier of an active video chat; 0 if none. Full information about the video chat can be received through the method getGroupCall.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get True, if the video chat has participants.
     */
    public function getHasParticipants(): bool
    {
        return $this->hasParticipants;
    }

    /**
     * Set True, if the video chat has participants.
     */
    public function setHasParticipants(bool $hasParticipants): self
    {
        $this->hasParticipants = $hasParticipants;

        return $this;
    }

    /**
     * Get Default group call participant identifier to join the video chat; may be null.
     */
    public function getDefaultParticipantId(): MessageSender|null
    {
        return $this->defaultParticipantId;
    }

    /**
     * Set Default group call participant identifier to join the video chat; may be null.
     */
    public function setDefaultParticipantId(MessageSender|null $defaultParticipantId): self
    {
        $this->defaultParticipantId = $defaultParticipantId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoChat',
            'group_call_id' => $this->getGroupCallId(),
            'has_participants' => $this->getHasParticipants(),
            'default_participant_id' => $this->getDefaultParticipantId(),
        ];
    }
}
