<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a group call participant hand is rased; for video chats only.
 */
class ToggleGroupCallParticipantIsHandRaised extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Participant identifier */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** Pass true if the user's hand needs to be raised. Only self hand can be raised. Requires groupCall.can_be_managed right to lower other's hand */
        #[SerializedName('is_hand_raised')]
        private bool $isHandRaised,
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
     * Get Pass true if the user's hand needs to be raised. Only self hand can be raised. Requires groupCall.can_be_managed right to lower other's hand.
     */
    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }

    /**
     * Set Pass true if the user's hand needs to be raised. Only self hand can be raised. Requires groupCall.can_be_managed right to lower other's hand.
     */
    public function setIsHandRaised(bool $isHandRaised): self
    {
        $this->isHandRaised = $isHandRaised;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGroupCallParticipantIsHandRaised',
            'group_call_id' => $this->getGroupCallId(),
            'participant_id' => $this->getParticipantId(),
            'is_hand_raised' => $this->getIsHandRaised(),
        ];
    }
}
