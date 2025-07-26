<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a special kind of a supergroup:
 */
class Supergroup implements \JsonSerializable
{
    public function __construct(
        /** Supergroup or channel identifier */
        #[SerializedName('id')]
        private int $id,
        /** Usernames of the supergroup or channel; may be null */
        #[SerializedName('usernames')]
        private Usernames|null $usernames = null,
        /** Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member */
        #[SerializedName('date')]
        private int $date,
        /** Status of the current user in the supergroup or channel; custom title will always be empty */
        #[SerializedName('status')]
        private ChatMemberStatus|null $status = null,
        /** Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through */
        #[SerializedName('member_count')]
        private int $memberCount,
        /** Approximate boost level for the chat */
        #[SerializedName('boost_level')]
        private int $boostLevel,
        /** True, if automatic translation of messages is enabled in the channel */
        #[SerializedName('has_automatic_translation')]
        private bool $hasAutomaticTranslation,
        /** True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel */
        #[SerializedName('has_linked_chat')]
        private bool $hasLinkedChat,
        /** True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup */
        #[SerializedName('has_location')]
        private bool $hasLocation,
        /** True, if messages sent to the channel contains name of the sender. This field is only applicable to channels */
        #[SerializedName('sign_messages')]
        private bool $signMessages,
        /** True, if messages sent to the channel have information about the sender user. This field is only applicable to channels */
        #[SerializedName('show_message_sender')]
        private bool $showMessageSender,
        /** True, if users need to join the supergroup before they can send messages. Always true for channels and non-discussion supergroups */
        #[SerializedName('join_to_send_messages')]
        private bool $joinToSendMessages,
        /** True, if all users directly joining the supergroup need to be approved by supergroup administrators. Always false for channels and supergroups without username, location, or a linked chat */
        #[SerializedName('join_by_request')]
        private bool $joinByRequest,
        /** True, if the slow mode is enabled in the supergroup */
        #[SerializedName('is_slow_mode_enabled')]
        private bool $isSlowModeEnabled,
        /** True, if the supergroup is a channel */
        #[SerializedName('is_channel')]
        private bool $isChannel,
        /** True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members */
        #[SerializedName('is_broadcast_group')]
        private bool $isBroadcastGroup,
        /** True, if the supergroup is a forum with topics */
        #[SerializedName('is_forum')]
        private bool $isForum,
        /** True, if the supergroup is a direct message group for a channel chat */
        #[SerializedName('is_direct_messages_group')]
        private bool $isDirectMessagesGroup,
        /** True, if the supergroup is a direct messages group for a channel chat that is administered by the current user */
        #[SerializedName('is_administered_direct_messages_group')]
        private bool $isAdministeredDirectMessagesGroup,
        /** Information about verification status of the supergroup or channel; may be null if none */
        #[SerializedName('verification_status')]
        private VerificationStatus|null $verificationStatus = null,
        /** True, if the channel has direct messages group */
        #[SerializedName('has_direct_messages_group')]
        private bool $hasDirectMessagesGroup,
        /** True, if the supergroup is a forum, which topics are shown in the same way as in channel direct messages groups */
        #[SerializedName('has_forum_tabs')]
        private bool $hasForumTabs,
        /** True, if content of media messages in the supergroup or channel chat must be hidden with 18+ spoiler */
        #[SerializedName('has_sensitive_content')]
        private bool $hasSensitiveContent,
        /** If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted */
        #[SerializedName('restriction_reason')]
        private string $restrictionReason,
        /** Number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
        /** True, if the supergroup or channel has non-expired stories available to the current user */
        #[SerializedName('has_active_stories')]
        private bool $hasActiveStories,
        /** True, if the supergroup or channel has unread non-expired stories available to the current user */
        #[SerializedName('has_unread_active_stories')]
        private bool $hasUnreadActiveStories,
    ) {
    }

    /**
     * Get Supergroup or channel identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Supergroup or channel identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Usernames of the supergroup or channel; may be null
     */
    public function getUsernames(): Usernames|null
    {
        return $this->usernames;
    }

    /**
     * Set Usernames of the supergroup or channel; may be null
     */
    public function setUsernames(Usernames|null $usernames): self
    {
        $this->usernames = $usernames;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Status of the current user in the supergroup or channel; custom title will always be empty
     */
    public function getStatus(): ChatMemberStatus|null
    {
        return $this->status;
    }

    /**
     * Set Status of the current user in the supergroup or channel; custom title will always be empty
     */
    public function setStatus(ChatMemberStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * Set Number of members in the supergroup or channel; 0 if unknown. Currently, it is guaranteed to be known only if the supergroup or channel was received through
     */
    public function setMemberCount(int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get Approximate boost level for the chat
     */
    public function getBoostLevel(): int
    {
        return $this->boostLevel;
    }

    /**
     * Set Approximate boost level for the chat
     */
    public function setBoostLevel(int $boostLevel): self
    {
        $this->boostLevel = $boostLevel;

        return $this;
    }

    /**
     * Get True, if automatic translation of messages is enabled in the channel
     */
    public function getHasAutomaticTranslation(): bool
    {
        return $this->hasAutomaticTranslation;
    }

    /**
     * Set True, if automatic translation of messages is enabled in the channel
     */
    public function setHasAutomaticTranslation(bool $hasAutomaticTranslation): self
    {
        $this->hasAutomaticTranslation = $hasAutomaticTranslation;

        return $this;
    }

    /**
     * Get True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel
     */
    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    /**
     * Set True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel
     */
    public function setHasLinkedChat(bool $hasLinkedChat): self
    {
        $this->hasLinkedChat = $hasLinkedChat;

        return $this;
    }

    /**
     * Get True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup
     */
    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    /**
     * Set True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup
     */
    public function setHasLocation(bool $hasLocation): self
    {
        $this->hasLocation = $hasLocation;

        return $this;
    }

    /**
     * Get True, if messages sent to the channel contains name of the sender. This field is only applicable to channels
     */
    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    /**
     * Set True, if messages sent to the channel contains name of the sender. This field is only applicable to channels
     */
    public function setSignMessages(bool $signMessages): self
    {
        $this->signMessages = $signMessages;

        return $this;
    }

    /**
     * Get True, if messages sent to the channel have information about the sender user. This field is only applicable to channels
     */
    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    /**
     * Set True, if messages sent to the channel have information about the sender user. This field is only applicable to channels
     */
    public function setShowMessageSender(bool $showMessageSender): self
    {
        $this->showMessageSender = $showMessageSender;

        return $this;
    }

    /**
     * Get True, if users need to join the supergroup before they can send messages. Always true for channels and non-discussion supergroups
     */
    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }

    /**
     * Set True, if users need to join the supergroup before they can send messages. Always true for channels and non-discussion supergroups
     */
    public function setJoinToSendMessages(bool $joinToSendMessages): self
    {
        $this->joinToSendMessages = $joinToSendMessages;

        return $this;
    }

    /**
     * Get True, if all users directly joining the supergroup need to be approved by supergroup administrators. Always false for channels and supergroups without username, location, or a linked chat
     */
    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }

    /**
     * Set True, if all users directly joining the supergroup need to be approved by supergroup administrators. Always false for channels and supergroups without username, location, or a linked chat
     */
    public function setJoinByRequest(bool $joinByRequest): self
    {
        $this->joinByRequest = $joinByRequest;

        return $this;
    }

    /**
     * Get True, if the slow mode is enabled in the supergroup
     */
    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    /**
     * Set True, if the slow mode is enabled in the supergroup
     */
    public function setIsSlowModeEnabled(bool $isSlowModeEnabled): self
    {
        $this->isSlowModeEnabled = $isSlowModeEnabled;

        return $this;
    }

    /**
     * Get True, if the supergroup is a channel
     */
    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    /**
     * Set True, if the supergroup is a channel
     */
    public function setIsChannel(bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    /**
     * Get True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members
     */
    public function getIsBroadcastGroup(): bool
    {
        return $this->isBroadcastGroup;
    }

    /**
     * Set True, if the supergroup is a broadcast group, i.e. only administrators can send messages and there is no limit on the number of members
     */
    public function setIsBroadcastGroup(bool $isBroadcastGroup): self
    {
        $this->isBroadcastGroup = $isBroadcastGroup;

        return $this;
    }

    /**
     * Get True, if the supergroup is a forum with topics
     */
    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    /**
     * Set True, if the supergroup is a forum with topics
     */
    public function setIsForum(bool $isForum): self
    {
        $this->isForum = $isForum;

        return $this;
    }

    /**
     * Get True, if the supergroup is a direct message group for a channel chat
     */
    public function getIsDirectMessagesGroup(): bool
    {
        return $this->isDirectMessagesGroup;
    }

    /**
     * Set True, if the supergroup is a direct message group for a channel chat
     */
    public function setIsDirectMessagesGroup(bool $isDirectMessagesGroup): self
    {
        $this->isDirectMessagesGroup = $isDirectMessagesGroup;

        return $this;
    }

    /**
     * Get True, if the supergroup is a direct messages group for a channel chat that is administered by the current user
     */
    public function getIsAdministeredDirectMessagesGroup(): bool
    {
        return $this->isAdministeredDirectMessagesGroup;
    }

    /**
     * Set True, if the supergroup is a direct messages group for a channel chat that is administered by the current user
     */
    public function setIsAdministeredDirectMessagesGroup(bool $isAdministeredDirectMessagesGroup): self
    {
        $this->isAdministeredDirectMessagesGroup = $isAdministeredDirectMessagesGroup;

        return $this;
    }

    /**
     * Get Information about verification status of the supergroup or channel; may be null if none
     */
    public function getVerificationStatus(): VerificationStatus|null
    {
        return $this->verificationStatus;
    }

    /**
     * Set Information about verification status of the supergroup or channel; may be null if none
     */
    public function setVerificationStatus(VerificationStatus|null $verificationStatus): self
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * Get True, if the channel has direct messages group
     */
    public function getHasDirectMessagesGroup(): bool
    {
        return $this->hasDirectMessagesGroup;
    }

    /**
     * Set True, if the channel has direct messages group
     */
    public function setHasDirectMessagesGroup(bool $hasDirectMessagesGroup): self
    {
        $this->hasDirectMessagesGroup = $hasDirectMessagesGroup;

        return $this;
    }

    /**
     * Get True, if the supergroup is a forum, which topics are shown in the same way as in channel direct messages groups
     */
    public function getHasForumTabs(): bool
    {
        return $this->hasForumTabs;
    }

    /**
     * Set True, if the supergroup is a forum, which topics are shown in the same way as in channel direct messages groups
     */
    public function setHasForumTabs(bool $hasForumTabs): self
    {
        $this->hasForumTabs = $hasForumTabs;

        return $this;
    }

    /**
     * Get True, if content of media messages in the supergroup or channel chat must be hidden with 18+ spoiler
     */
    public function getHasSensitiveContent(): bool
    {
        return $this->hasSensitiveContent;
    }

    /**
     * Set True, if content of media messages in the supergroup or channel chat must be hidden with 18+ spoiler
     */
    public function setHasSensitiveContent(bool $hasSensitiveContent): self
    {
        $this->hasSensitiveContent = $hasSensitiveContent;

        return $this;
    }

    /**
     * Get If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted
     */
    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    /**
     * Set If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted
     */
    public function setRestrictionReason(string $restrictionReason): self
    {
        $this->restrictionReason = $restrictionReason;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel has non-expired stories available to the current user
     */
    public function getHasActiveStories(): bool
    {
        return $this->hasActiveStories;
    }

    /**
     * Set True, if the supergroup or channel has non-expired stories available to the current user
     */
    public function setHasActiveStories(bool $hasActiveStories): self
    {
        $this->hasActiveStories = $hasActiveStories;

        return $this;
    }

    /**
     * Get True, if the supergroup or channel has unread non-expired stories available to the current user
     */
    public function getHasUnreadActiveStories(): bool
    {
        return $this->hasUnreadActiveStories;
    }

    /**
     * Set True, if the supergroup or channel has unread non-expired stories available to the current user
     */
    public function setHasUnreadActiveStories(bool $hasUnreadActiveStories): self
    {
        $this->hasUnreadActiveStories = $hasUnreadActiveStories;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroup',
            'id' => $this->getId(),
            'usernames' => $this->getUsernames(),
            'date' => $this->getDate(),
            'status' => $this->getStatus(),
            'member_count' => $this->getMemberCount(),
            'boost_level' => $this->getBoostLevel(),
            'has_automatic_translation' => $this->getHasAutomaticTranslation(),
            'has_linked_chat' => $this->getHasLinkedChat(),
            'has_location' => $this->getHasLocation(),
            'sign_messages' => $this->getSignMessages(),
            'show_message_sender' => $this->getShowMessageSender(),
            'join_to_send_messages' => $this->getJoinToSendMessages(),
            'join_by_request' => $this->getJoinByRequest(),
            'is_slow_mode_enabled' => $this->getIsSlowModeEnabled(),
            'is_channel' => $this->getIsChannel(),
            'is_broadcast_group' => $this->getIsBroadcastGroup(),
            'is_forum' => $this->getIsForum(),
            'is_direct_messages_group' => $this->getIsDirectMessagesGroup(),
            'is_administered_direct_messages_group' => $this->getIsAdministeredDirectMessagesGroup(),
            'verification_status' => $this->getVerificationStatus(),
            'has_direct_messages_group' => $this->getHasDirectMessagesGroup(),
            'has_forum_tabs' => $this->getHasForumTabs(),
            'has_sensitive_content' => $this->getHasSensitiveContent(),
            'restriction_reason' => $this->getRestrictionReason(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
            'has_active_stories' => $this->getHasActiveStories(),
            'has_unread_active_stories' => $this->getHasUnreadActiveStories(),
        ];
    }
}
