<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a group call participant.
 */
class GroupCallParticipant implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the group call participant */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** User's audio channel synchronization source identifier */
        #[SerializedName('audio_source_id')]
        private int $audioSourceId,
        /** User's screen sharing audio channel synchronization source identifier */
        #[SerializedName('screen_sharing_audio_source_id')]
        private int $screenSharingAudioSourceId,
        /** Information about user's video channel; may be null if there is no active video */
        #[SerializedName('video_info')]
        private GroupCallParticipantVideoInfo|null $videoInfo = null,
        /** Information about user's screen sharing video channel; may be null if there is no active screen sharing video */
        #[SerializedName('screen_sharing_video_info')]
        private GroupCallParticipantVideoInfo|null $screenSharingVideoInfo = null,
        /** The participant user's bio or the participant chat's description */
        #[SerializedName('bio')]
        private string $bio,
        /** True, if the participant is the current user */
        #[SerializedName('is_current_user')]
        private bool $isCurrentUser,
        /** True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking */
        #[SerializedName('is_speaking')]
        private bool $isSpeaking,
        /** True, if the participant hand is raised */
        #[SerializedName('is_hand_raised')]
        private bool $isHandRaised,
        /** True, if the current user can mute the participant for all other group call participants */
        #[SerializedName('can_be_muted_for_all_users')]
        private bool $canBeMutedForAllUsers,
        /** True, if the current user can allow the participant to unmute themselves or unmute the participant (if the participant is the current user) */
        #[SerializedName('can_be_unmuted_for_all_users')]
        private bool $canBeUnmutedForAllUsers,
        /** True, if the current user can mute the participant only for self */
        #[SerializedName('can_be_muted_for_current_user')]
        private bool $canBeMutedForCurrentUser,
        /** True, if the current user can unmute the participant for self */
        #[SerializedName('can_be_unmuted_for_current_user')]
        private bool $canBeUnmutedForCurrentUser,
        /** True, if the participant is muted for all users */
        #[SerializedName('is_muted_for_all_users')]
        private bool $isMutedForAllUsers,
        /** True, if the participant is muted for the current user */
        #[SerializedName('is_muted_for_current_user')]
        private bool $isMutedForCurrentUser,
        /** True, if the participant is muted for all users, but can unmute themselves */
        #[SerializedName('can_unmute_self')]
        private bool $canUnmuteSelf,
        /** Participant's volume level; 1-20000 in hundreds of percents */
        #[SerializedName('volume_level')]
        private int $volumeLevel,
        /** User's order in the group call participant list. Orders must be compared lexicographically. The bigger is order, the higher is user in the list. If order is empty, the user must be removed from the participant list */
        #[SerializedName('order')]
        private string $order,
    ) {
    }

    /**
     * Get Identifier of the group call participant.
     */
    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    /**
     * Set Identifier of the group call participant.
     */
    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get User's audio channel synchronization source identifier.
     */
    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    /**
     * Set User's audio channel synchronization source identifier.
     */
    public function setAudioSourceId(int $audioSourceId): self
    {
        $this->audioSourceId = $audioSourceId;

        return $this;
    }

    /**
     * Get User's screen sharing audio channel synchronization source identifier.
     */
    public function getScreenSharingAudioSourceId(): int
    {
        return $this->screenSharingAudioSourceId;
    }

    /**
     * Set User's screen sharing audio channel synchronization source identifier.
     */
    public function setScreenSharingAudioSourceId(int $screenSharingAudioSourceId): self
    {
        $this->screenSharingAudioSourceId = $screenSharingAudioSourceId;

        return $this;
    }

    /**
     * Get Information about user's video channel; may be null if there is no active video.
     */
    public function getVideoInfo(): GroupCallParticipantVideoInfo|null
    {
        return $this->videoInfo;
    }

    /**
     * Set Information about user's video channel; may be null if there is no active video.
     */
    public function setVideoInfo(GroupCallParticipantVideoInfo|null $videoInfo): self
    {
        $this->videoInfo = $videoInfo;

        return $this;
    }

    /**
     * Get Information about user's screen sharing video channel; may be null if there is no active screen sharing video.
     */
    public function getScreenSharingVideoInfo(): GroupCallParticipantVideoInfo|null
    {
        return $this->screenSharingVideoInfo;
    }

    /**
     * Set Information about user's screen sharing video channel; may be null if there is no active screen sharing video.
     */
    public function setScreenSharingVideoInfo(GroupCallParticipantVideoInfo|null $screenSharingVideoInfo): self
    {
        $this->screenSharingVideoInfo = $screenSharingVideoInfo;

        return $this;
    }

    /**
     * Get The participant user's bio or the participant chat's description.
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * Set The participant user's bio or the participant chat's description.
     */
    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get True, if the participant is the current user.
     */
    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    /**
     * Set True, if the participant is the current user.
     */
    public function setIsCurrentUser(bool $isCurrentUser): self
    {
        $this->isCurrentUser = $isCurrentUser;

        return $this;
    }

    /**
     * Get True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking.
     */
    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    /**
     * Set True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking.
     */
    public function setIsSpeaking(bool $isSpeaking): self
    {
        $this->isSpeaking = $isSpeaking;

        return $this;
    }

    /**
     * Get True, if the participant hand is raised.
     */
    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }

    /**
     * Set True, if the participant hand is raised.
     */
    public function setIsHandRaised(bool $isHandRaised): self
    {
        $this->isHandRaised = $isHandRaised;

        return $this;
    }

    /**
     * Get True, if the current user can mute the participant for all other group call participants.
     */
    public function getCanBeMutedForAllUsers(): bool
    {
        return $this->canBeMutedForAllUsers;
    }

    /**
     * Set True, if the current user can mute the participant for all other group call participants.
     */
    public function setCanBeMutedForAllUsers(bool $canBeMutedForAllUsers): self
    {
        $this->canBeMutedForAllUsers = $canBeMutedForAllUsers;

        return $this;
    }

    /**
     * Get True, if the current user can allow the participant to unmute themselves or unmute the participant (if the participant is the current user).
     */
    public function getCanBeUnmutedForAllUsers(): bool
    {
        return $this->canBeUnmutedForAllUsers;
    }

    /**
     * Set True, if the current user can allow the participant to unmute themselves or unmute the participant (if the participant is the current user).
     */
    public function setCanBeUnmutedForAllUsers(bool $canBeUnmutedForAllUsers): self
    {
        $this->canBeUnmutedForAllUsers = $canBeUnmutedForAllUsers;

        return $this;
    }

    /**
     * Get True, if the current user can mute the participant only for self.
     */
    public function getCanBeMutedForCurrentUser(): bool
    {
        return $this->canBeMutedForCurrentUser;
    }

    /**
     * Set True, if the current user can mute the participant only for self.
     */
    public function setCanBeMutedForCurrentUser(bool $canBeMutedForCurrentUser): self
    {
        $this->canBeMutedForCurrentUser = $canBeMutedForCurrentUser;

        return $this;
    }

    /**
     * Get True, if the current user can unmute the participant for self.
     */
    public function getCanBeUnmutedForCurrentUser(): bool
    {
        return $this->canBeUnmutedForCurrentUser;
    }

    /**
     * Set True, if the current user can unmute the participant for self.
     */
    public function setCanBeUnmutedForCurrentUser(bool $canBeUnmutedForCurrentUser): self
    {
        $this->canBeUnmutedForCurrentUser = $canBeUnmutedForCurrentUser;

        return $this;
    }

    /**
     * Get True, if the participant is muted for all users.
     */
    public function getIsMutedForAllUsers(): bool
    {
        return $this->isMutedForAllUsers;
    }

    /**
     * Set True, if the participant is muted for all users.
     */
    public function setIsMutedForAllUsers(bool $isMutedForAllUsers): self
    {
        $this->isMutedForAllUsers = $isMutedForAllUsers;

        return $this;
    }

    /**
     * Get True, if the participant is muted for the current user.
     */
    public function getIsMutedForCurrentUser(): bool
    {
        return $this->isMutedForCurrentUser;
    }

    /**
     * Set True, if the participant is muted for the current user.
     */
    public function setIsMutedForCurrentUser(bool $isMutedForCurrentUser): self
    {
        $this->isMutedForCurrentUser = $isMutedForCurrentUser;

        return $this;
    }

    /**
     * Get True, if the participant is muted for all users, but can unmute themselves.
     */
    public function getCanUnmuteSelf(): bool
    {
        return $this->canUnmuteSelf;
    }

    /**
     * Set True, if the participant is muted for all users, but can unmute themselves.
     */
    public function setCanUnmuteSelf(bool $canUnmuteSelf): self
    {
        $this->canUnmuteSelf = $canUnmuteSelf;

        return $this;
    }

    /**
     * Get Participant's volume level; 1-20000 in hundreds of percents.
     */
    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    /**
     * Set Participant's volume level; 1-20000 in hundreds of percents.
     */
    public function setVolumeLevel(int $volumeLevel): self
    {
        $this->volumeLevel = $volumeLevel;

        return $this;
    }

    /**
     * Get User's order in the group call participant list. Orders must be compared lexicographically. The bigger is order, the higher is user in the list. If order is empty, the user must be removed from the participant list.
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Set User's order in the group call participant list. Orders must be compared lexicographically. The bigger is order, the higher is user in the list. If order is empty, the user must be removed from the participant list.
     */
    public function setOrder(string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallParticipant',
            'participant_id' => $this->getParticipantId(),
            'audio_source_id' => $this->getAudioSourceId(),
            'screen_sharing_audio_source_id' => $this->getScreenSharingAudioSourceId(),
            'video_info' => $this->getVideoInfo(),
            'screen_sharing_video_info' => $this->getScreenSharingVideoInfo(),
            'bio' => $this->getBio(),
            'is_current_user' => $this->getIsCurrentUser(),
            'is_speaking' => $this->getIsSpeaking(),
            'is_hand_raised' => $this->getIsHandRaised(),
            'can_be_muted_for_all_users' => $this->getCanBeMutedForAllUsers(),
            'can_be_unmuted_for_all_users' => $this->getCanBeUnmutedForAllUsers(),
            'can_be_muted_for_current_user' => $this->getCanBeMutedForCurrentUser(),
            'can_be_unmuted_for_current_user' => $this->getCanBeUnmutedForCurrentUser(),
            'is_muted_for_all_users' => $this->getIsMutedForAllUsers(),
            'is_muted_for_current_user' => $this->getIsMutedForCurrentUser(),
            'can_unmute_self' => $this->getCanUnmuteSelf(),
            'volume_level' => $this->getVolumeLevel(),
            'order' => $this->getOrder(),
        ];
    }
}
