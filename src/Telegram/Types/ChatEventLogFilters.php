<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a set of filters used to obtain a chat event log.
 */
class ChatEventLogFilters implements \JsonSerializable
{
    public function __construct(
        /** True, if message edits need to be returned */
        #[SerializedName('message_edits')]
        private bool $messageEdits,
        /** True, if message deletions need to be returned */
        #[SerializedName('message_deletions')]
        private bool $messageDeletions,
        /** True, if pin/unpin events need to be returned */
        #[SerializedName('message_pins')]
        private bool $messagePins,
        /** True, if members joining events need to be returned */
        #[SerializedName('member_joins')]
        private bool $memberJoins,
        /** True, if members leaving events need to be returned */
        #[SerializedName('member_leaves')]
        private bool $memberLeaves,
        /** True, if invited member events need to be returned */
        #[SerializedName('member_invites')]
        private bool $memberInvites,
        /** True, if member promotion/demotion events need to be returned */
        #[SerializedName('member_promotions')]
        private bool $memberPromotions,
        /** True, if member restricted/unrestricted/banned/unbanned events need to be returned */
        #[SerializedName('member_restrictions')]
        private bool $memberRestrictions,
        /** True, if changes in chat information need to be returned */
        #[SerializedName('info_changes')]
        private bool $infoChanges,
        /** True, if changes in chat settings need to be returned */
        #[SerializedName('setting_changes')]
        private bool $settingChanges,
        /** True, if changes to invite links need to be returned */
        #[SerializedName('invite_link_changes')]
        private bool $inviteLinkChanges,
        /** True, if video chat actions need to be returned */
        #[SerializedName('video_chat_changes')]
        private bool $videoChatChanges,
        /** True, if forum-related actions need to be returned */
        #[SerializedName('forum_changes')]
        private bool $forumChanges,
        /** True, if subscription extensions need to be returned */
        #[SerializedName('subscription_extensions')]
        private bool $subscriptionExtensions,
    ) {
    }

    /**
     * Get True, if message edits need to be returned.
     */
    public function getMessageEdits(): bool
    {
        return $this->messageEdits;
    }

    /**
     * Set True, if message edits need to be returned.
     */
    public function setMessageEdits(bool $messageEdits): self
    {
        $this->messageEdits = $messageEdits;

        return $this;
    }

    /**
     * Get True, if message deletions need to be returned.
     */
    public function getMessageDeletions(): bool
    {
        return $this->messageDeletions;
    }

    /**
     * Set True, if message deletions need to be returned.
     */
    public function setMessageDeletions(bool $messageDeletions): self
    {
        $this->messageDeletions = $messageDeletions;

        return $this;
    }

    /**
     * Get True, if pin/unpin events need to be returned.
     */
    public function getMessagePins(): bool
    {
        return $this->messagePins;
    }

    /**
     * Set True, if pin/unpin events need to be returned.
     */
    public function setMessagePins(bool $messagePins): self
    {
        $this->messagePins = $messagePins;

        return $this;
    }

    /**
     * Get True, if members joining events need to be returned.
     */
    public function getMemberJoins(): bool
    {
        return $this->memberJoins;
    }

    /**
     * Set True, if members joining events need to be returned.
     */
    public function setMemberJoins(bool $memberJoins): self
    {
        $this->memberJoins = $memberJoins;

        return $this;
    }

    /**
     * Get True, if members leaving events need to be returned.
     */
    public function getMemberLeaves(): bool
    {
        return $this->memberLeaves;
    }

    /**
     * Set True, if members leaving events need to be returned.
     */
    public function setMemberLeaves(bool $memberLeaves): self
    {
        $this->memberLeaves = $memberLeaves;

        return $this;
    }

    /**
     * Get True, if invited member events need to be returned.
     */
    public function getMemberInvites(): bool
    {
        return $this->memberInvites;
    }

    /**
     * Set True, if invited member events need to be returned.
     */
    public function setMemberInvites(bool $memberInvites): self
    {
        $this->memberInvites = $memberInvites;

        return $this;
    }

    /**
     * Get True, if member promotion/demotion events need to be returned.
     */
    public function getMemberPromotions(): bool
    {
        return $this->memberPromotions;
    }

    /**
     * Set True, if member promotion/demotion events need to be returned.
     */
    public function setMemberPromotions(bool $memberPromotions): self
    {
        $this->memberPromotions = $memberPromotions;

        return $this;
    }

    /**
     * Get True, if member restricted/unrestricted/banned/unbanned events need to be returned.
     */
    public function getMemberRestrictions(): bool
    {
        return $this->memberRestrictions;
    }

    /**
     * Set True, if member restricted/unrestricted/banned/unbanned events need to be returned.
     */
    public function setMemberRestrictions(bool $memberRestrictions): self
    {
        $this->memberRestrictions = $memberRestrictions;

        return $this;
    }

    /**
     * Get True, if changes in chat information need to be returned.
     */
    public function getInfoChanges(): bool
    {
        return $this->infoChanges;
    }

    /**
     * Set True, if changes in chat information need to be returned.
     */
    public function setInfoChanges(bool $infoChanges): self
    {
        $this->infoChanges = $infoChanges;

        return $this;
    }

    /**
     * Get True, if changes in chat settings need to be returned.
     */
    public function getSettingChanges(): bool
    {
        return $this->settingChanges;
    }

    /**
     * Set True, if changes in chat settings need to be returned.
     */
    public function setSettingChanges(bool $settingChanges): self
    {
        $this->settingChanges = $settingChanges;

        return $this;
    }

    /**
     * Get True, if changes to invite links need to be returned.
     */
    public function getInviteLinkChanges(): bool
    {
        return $this->inviteLinkChanges;
    }

    /**
     * Set True, if changes to invite links need to be returned.
     */
    public function setInviteLinkChanges(bool $inviteLinkChanges): self
    {
        $this->inviteLinkChanges = $inviteLinkChanges;

        return $this;
    }

    /**
     * Get True, if video chat actions need to be returned.
     */
    public function getVideoChatChanges(): bool
    {
        return $this->videoChatChanges;
    }

    /**
     * Set True, if video chat actions need to be returned.
     */
    public function setVideoChatChanges(bool $videoChatChanges): self
    {
        $this->videoChatChanges = $videoChatChanges;

        return $this;
    }

    /**
     * Get True, if forum-related actions need to be returned.
     */
    public function getForumChanges(): bool
    {
        return $this->forumChanges;
    }

    /**
     * Set True, if forum-related actions need to be returned.
     */
    public function setForumChanges(bool $forumChanges): self
    {
        $this->forumChanges = $forumChanges;

        return $this;
    }

    /**
     * Get True, if subscription extensions need to be returned.
     */
    public function getSubscriptionExtensions(): bool
    {
        return $this->subscriptionExtensions;
    }

    /**
     * Set True, if subscription extensions need to be returned.
     */
    public function setSubscriptionExtensions(bool $subscriptionExtensions): self
    {
        $this->subscriptionExtensions = $subscriptionExtensions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventLogFilters',
            'message_edits' => $this->getMessageEdits(),
            'message_deletions' => $this->getMessageDeletions(),
            'message_pins' => $this->getMessagePins(),
            'member_joins' => $this->getMemberJoins(),
            'member_leaves' => $this->getMemberLeaves(),
            'member_invites' => $this->getMemberInvites(),
            'member_promotions' => $this->getMemberPromotions(),
            'member_restrictions' => $this->getMemberRestrictions(),
            'info_changes' => $this->getInfoChanges(),
            'setting_changes' => $this->getSettingChanges(),
            'invite_link_changes' => $this->getInviteLinkChanges(),
            'video_chat_changes' => $this->getVideoChatChanges(),
            'forum_changes' => $this->getForumChanges(),
            'subscription_extensions' => $this->getSubscriptionExtensions(),
        ];
    }
}
