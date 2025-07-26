<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a group call
 */
class GroupCall implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('id')]
        private int $id,
        /** Group call title; for video chats only */
        #[SerializedName('title')]
        private string $title,
        /** Invite link for the group call; for group calls that aren't bound to a chat. For video chats call getVideoChatInviteLink to get the link */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 if it is already active or was ended; for video chats only */
        #[SerializedName('scheduled_start_date')]
        private int $scheduledStartDate,
        /** True, if the group call is scheduled and the current user will receive a notification when the group call starts; for video chats only */
        #[SerializedName('enabled_start_notification')]
        private bool $enabledStartNotification,
        /** True, if the call is active */
        #[SerializedName('is_active')]
        private bool $isActive,
        /** True, if the call is bound to a chat */
        #[SerializedName('is_video_chat')]
        private bool $isVideoChat,
        /** True, if the call is an RTMP stream instead of an ordinary video chat; for video chats only */
        #[SerializedName('is_rtmp_stream')]
        private bool $isRtmpStream,
        /** True, if the call is joined */
        #[SerializedName('is_joined')]
        private bool $isJoined,
        /** True, if user was kicked from the call because of network loss and the call needs to be rejoined */
        #[SerializedName('need_rejoin')]
        private bool $needRejoin,
        /** True, if the user is the owner of the call and can end the call, change volume level of other users, or ban users there; for group calls that aren't bound to a chat */
        #[SerializedName('is_owned')]
        private bool $isOwned,
        /** True, if the current user can manage the group call; for video chats only */
        #[SerializedName('can_be_managed')]
        private bool $canBeManaged,
        /** Number of participants in the group call */
        #[SerializedName('participant_count')]
        private int $participantCount,
        /** True, if group call participants, which are muted, aren't returned in participant list; for video chats only */
        #[SerializedName('has_hidden_listeners')]
        private bool $hasHiddenListeners,
        /** True, if all group call participants are loaded */
        #[SerializedName('loaded_all_participants')]
        private bool $loadedAllParticipants,
        /** At most 3 recently speaking users in the group call */
        #[SerializedName('recent_speakers')]
        private array|null $recentSpeakers = null,
        /** True, if the current user's video is enabled */
        #[SerializedName('is_my_video_enabled')]
        private bool $isMyVideoEnabled,
        /** True, if the current user's video is paused */
        #[SerializedName('is_my_video_paused')]
        private bool $isMyVideoPaused,
        /** True, if the current user can broadcast video or share screen */
        #[SerializedName('can_enable_video')]
        private bool $canEnableVideo,
        /** True, if only group call administrators can unmute new participants; for video chats only */
        #[SerializedName('mute_new_participants')]
        private bool $muteNewParticipants,
        /** True, if the current user can enable or disable mute_new_participants setting; for video chats only */
        #[SerializedName('can_toggle_mute_new_participants')]
        private bool $canToggleMuteNewParticipants,
        /** Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on */
        #[SerializedName('record_duration')]
        private int $recordDuration,
        /** True, if a video file is being recorded for the call */
        #[SerializedName('is_video_recorded')]
        private bool $isVideoRecorded,
        /** Call duration, in seconds; for ended calls only */
        #[SerializedName('duration')]
        private int $duration,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Group call identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Group call title; for video chats only
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Group call title; for video chats only
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Invite link for the group call; for group calls that aren't bound to a chat. For video chats call getVideoChatInviteLink to get the link
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link for the group call; for group calls that aren't bound to a chat. For video chats call getVideoChatInviteLink to get the link
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 if it is already active or was ended; for video chats only
     */
    public function getScheduledStartDate(): int
    {
        return $this->scheduledStartDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 if it is already active or was ended; for video chats only
     */
    public function setScheduledStartDate(int $scheduledStartDate): self
    {
        $this->scheduledStartDate = $scheduledStartDate;

        return $this;
    }

    /**
     * Get True, if the group call is scheduled and the current user will receive a notification when the group call starts; for video chats only
     */
    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }

    /**
     * Set True, if the group call is scheduled and the current user will receive a notification when the group call starts; for video chats only
     */
    public function setEnabledStartNotification(bool $enabledStartNotification): self
    {
        $this->enabledStartNotification = $enabledStartNotification;

        return $this;
    }

    /**
     * Get True, if the call is active
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set True, if the call is active
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get True, if the call is bound to a chat
     */
    public function getIsVideoChat(): bool
    {
        return $this->isVideoChat;
    }

    /**
     * Set True, if the call is bound to a chat
     */
    public function setIsVideoChat(bool $isVideoChat): self
    {
        $this->isVideoChat = $isVideoChat;

        return $this;
    }

    /**
     * Get True, if the call is an RTMP stream instead of an ordinary video chat; for video chats only
     */
    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    /**
     * Set True, if the call is an RTMP stream instead of an ordinary video chat; for video chats only
     */
    public function setIsRtmpStream(bool $isRtmpStream): self
    {
        $this->isRtmpStream = $isRtmpStream;

        return $this;
    }

    /**
     * Get True, if the call is joined
     */
    public function getIsJoined(): bool
    {
        return $this->isJoined;
    }

    /**
     * Set True, if the call is joined
     */
    public function setIsJoined(bool $isJoined): self
    {
        $this->isJoined = $isJoined;

        return $this;
    }

    /**
     * Get True, if user was kicked from the call because of network loss and the call needs to be rejoined
     */
    public function getNeedRejoin(): bool
    {
        return $this->needRejoin;
    }

    /**
     * Set True, if user was kicked from the call because of network loss and the call needs to be rejoined
     */
    public function setNeedRejoin(bool $needRejoin): self
    {
        $this->needRejoin = $needRejoin;

        return $this;
    }

    /**
     * Get True, if the user is the owner of the call and can end the call, change volume level of other users, or ban users there; for group calls that aren't bound to a chat
     */
    public function getIsOwned(): bool
    {
        return $this->isOwned;
    }

    /**
     * Set True, if the user is the owner of the call and can end the call, change volume level of other users, or ban users there; for group calls that aren't bound to a chat
     */
    public function setIsOwned(bool $isOwned): self
    {
        $this->isOwned = $isOwned;

        return $this;
    }

    /**
     * Get True, if the current user can manage the group call; for video chats only
     */
    public function getCanBeManaged(): bool
    {
        return $this->canBeManaged;
    }

    /**
     * Set True, if the current user can manage the group call; for video chats only
     */
    public function setCanBeManaged(bool $canBeManaged): self
    {
        $this->canBeManaged = $canBeManaged;

        return $this;
    }

    /**
     * Get Number of participants in the group call
     */
    public function getParticipantCount(): int
    {
        return $this->participantCount;
    }

    /**
     * Set Number of participants in the group call
     */
    public function setParticipantCount(int $participantCount): self
    {
        $this->participantCount = $participantCount;

        return $this;
    }

    /**
     * Get True, if group call participants, which are muted, aren't returned in participant list; for video chats only
     */
    public function getHasHiddenListeners(): bool
    {
        return $this->hasHiddenListeners;
    }

    /**
     * Set True, if group call participants, which are muted, aren't returned in participant list; for video chats only
     */
    public function setHasHiddenListeners(bool $hasHiddenListeners): self
    {
        $this->hasHiddenListeners = $hasHiddenListeners;

        return $this;
    }

    /**
     * Get True, if all group call participants are loaded
     */
    public function getLoadedAllParticipants(): bool
    {
        return $this->loadedAllParticipants;
    }

    /**
     * Set True, if all group call participants are loaded
     */
    public function setLoadedAllParticipants(bool $loadedAllParticipants): self
    {
        $this->loadedAllParticipants = $loadedAllParticipants;

        return $this;
    }

    /**
     * Get At most 3 recently speaking users in the group call
     */
    public function getRecentSpeakers(): array|null
    {
        return $this->recentSpeakers;
    }

    /**
     * Set At most 3 recently speaking users in the group call
     */
    public function setRecentSpeakers(array|null $recentSpeakers): self
    {
        $this->recentSpeakers = $recentSpeakers;

        return $this;
    }

    /**
     * Get True, if the current user's video is enabled
     */
    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    /**
     * Set True, if the current user's video is enabled
     */
    public function setIsMyVideoEnabled(bool $isMyVideoEnabled): self
    {
        $this->isMyVideoEnabled = $isMyVideoEnabled;

        return $this;
    }

    /**
     * Get True, if the current user's video is paused
     */
    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }

    /**
     * Set True, if the current user's video is paused
     */
    public function setIsMyVideoPaused(bool $isMyVideoPaused): self
    {
        $this->isMyVideoPaused = $isMyVideoPaused;

        return $this;
    }

    /**
     * Get True, if the current user can broadcast video or share screen
     */
    public function getCanEnableVideo(): bool
    {
        return $this->canEnableVideo;
    }

    /**
     * Set True, if the current user can broadcast video or share screen
     */
    public function setCanEnableVideo(bool $canEnableVideo): self
    {
        $this->canEnableVideo = $canEnableVideo;

        return $this;
    }

    /**
     * Get True, if only group call administrators can unmute new participants; for video chats only
     */
    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    /**
     * Set True, if only group call administrators can unmute new participants; for video chats only
     */
    public function setMuteNewParticipants(bool $muteNewParticipants): self
    {
        $this->muteNewParticipants = $muteNewParticipants;

        return $this;
    }

    /**
     * Get True, if the current user can enable or disable mute_new_participants setting; for video chats only
     */
    public function getCanToggleMuteNewParticipants(): bool
    {
        return $this->canToggleMuteNewParticipants;
    }

    /**
     * Set True, if the current user can enable or disable mute_new_participants setting; for video chats only
     */
    public function setCanToggleMuteNewParticipants(bool $canToggleMuteNewParticipants): self
    {
        $this->canToggleMuteNewParticipants = $canToggleMuteNewParticipants;

        return $this;
    }

    /**
     * Get Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on
     */
    public function getRecordDuration(): int
    {
        return $this->recordDuration;
    }

    /**
     * Set Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on
     */
    public function setRecordDuration(int $recordDuration): self
    {
        $this->recordDuration = $recordDuration;

        return $this;
    }

    /**
     * Get True, if a video file is being recorded for the call
     */
    public function getIsVideoRecorded(): bool
    {
        return $this->isVideoRecorded;
    }

    /**
     * Set True, if a video file is being recorded for the call
     */
    public function setIsVideoRecorded(bool $isVideoRecorded): self
    {
        $this->isVideoRecorded = $isVideoRecorded;

        return $this;
    }

    /**
     * Get Call duration, in seconds; for ended calls only
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Call duration, in seconds; for ended calls only
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCall',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'invite_link' => $this->getInviteLink(),
            'scheduled_start_date' => $this->getScheduledStartDate(),
            'enabled_start_notification' => $this->getEnabledStartNotification(),
            'is_active' => $this->getIsActive(),
            'is_video_chat' => $this->getIsVideoChat(),
            'is_rtmp_stream' => $this->getIsRtmpStream(),
            'is_joined' => $this->getIsJoined(),
            'need_rejoin' => $this->getNeedRejoin(),
            'is_owned' => $this->getIsOwned(),
            'can_be_managed' => $this->getCanBeManaged(),
            'participant_count' => $this->getParticipantCount(),
            'has_hidden_listeners' => $this->getHasHiddenListeners(),
            'loaded_all_participants' => $this->getLoadedAllParticipants(),
            'recent_speakers' => $this->getRecentSpeakers(),
            'is_my_video_enabled' => $this->getIsMyVideoEnabled(),
            'is_my_video_paused' => $this->getIsMyVideoPaused(),
            'can_enable_video' => $this->getCanEnableVideo(),
            'mute_new_participants' => $this->getMuteNewParticipants(),
            'can_toggle_mute_new_participants' => $this->getCanToggleMuteNewParticipants(),
            'record_duration' => $this->getRecordDuration(),
            'is_video_recorded' => $this->getIsVideoRecorded(),
            'duration' => $this->getDuration(),
        ];
    }
}
