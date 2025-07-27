<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes rights of the administrator.
 */
class ChatAdministratorRights implements \JsonSerializable
{
    public function __construct(
        /** True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report supergroup spam messages, */
        #[SerializedName('can_manage_chat')]
        private bool $canManageChat,
        /** True, if the administrator can change the chat title, photo, and other settings */
        #[SerializedName('can_change_info')]
        private bool $canChangeInfo,
        /** True, if the administrator can create channel posts, answer to channel direct messages, or view channel statistics; applicable to channels only */
        #[SerializedName('can_post_messages')]
        private bool $canPostMessages,
        /** True, if the administrator can edit messages of other users and pin messages; applicable to channels only */
        #[SerializedName('can_edit_messages')]
        private bool $canEditMessages,
        /** True, if the administrator can delete messages of other users */
        #[SerializedName('can_delete_messages')]
        private bool $canDeleteMessages,
        /** True, if the administrator can invite new users to the chat */
        #[SerializedName('can_invite_users')]
        private bool $canInviteUsers,
        /** True, if the administrator can restrict, ban, or unban chat members or view supergroup statistics; always true for channels */
        #[SerializedName('can_restrict_members')]
        private bool $canRestrictMembers,
        /** True, if the administrator can pin messages; applicable to basic groups and supergroups only */
        #[SerializedName('can_pin_messages')]
        private bool $canPinMessages,
        /** True, if the administrator can create, rename, close, reopen, hide, and unhide forum topics; applicable to forum supergroups only */
        #[SerializedName('can_manage_topics')]
        private bool $canManageTopics,
        /** True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that were directly or indirectly promoted by them */
        #[SerializedName('can_promote_members')]
        private bool $canPromoteMembers,
        /** True, if the administrator can manage video chats */
        #[SerializedName('can_manage_video_chats')]
        private bool $canManageVideoChats,
        /** True, if the administrator can create new chat stories, or edit and delete posted stories; applicable to supergroups and channels only */
        #[SerializedName('can_post_stories')]
        private bool $canPostStories,
        /** True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access story archive; applicable to supergroups and channels only */
        #[SerializedName('can_edit_stories')]
        private bool $canEditStories,
        /** True, if the administrator can delete stories posted by other users; applicable to supergroups and channels only */
        #[SerializedName('can_delete_stories')]
        private bool $canDeleteStories,
        /** True, if the administrator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
    ) {
    }

    /**
     * Get True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report supergroup spam messages,.
     */
    public function getCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    /**
     * Set True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report supergroup spam messages,.
     */
    public function setCanManageChat(bool $canManageChat): self
    {
        $this->canManageChat = $canManageChat;

        return $this;
    }

    /**
     * Get True, if the administrator can change the chat title, photo, and other settings.
     */
    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    /**
     * Set True, if the administrator can change the chat title, photo, and other settings.
     */
    public function setCanChangeInfo(bool $canChangeInfo): self
    {
        $this->canChangeInfo = $canChangeInfo;

        return $this;
    }

    /**
     * Get True, if the administrator can create channel posts, answer to channel direct messages, or view channel statistics; applicable to channels only.
     */
    public function getCanPostMessages(): bool
    {
        return $this->canPostMessages;
    }

    /**
     * Set True, if the administrator can create channel posts, answer to channel direct messages, or view channel statistics; applicable to channels only.
     */
    public function setCanPostMessages(bool $canPostMessages): self
    {
        $this->canPostMessages = $canPostMessages;

        return $this;
    }

    /**
     * Get True, if the administrator can edit messages of other users and pin messages; applicable to channels only.
     */
    public function getCanEditMessages(): bool
    {
        return $this->canEditMessages;
    }

    /**
     * Set True, if the administrator can edit messages of other users and pin messages; applicable to channels only.
     */
    public function setCanEditMessages(bool $canEditMessages): self
    {
        $this->canEditMessages = $canEditMessages;

        return $this;
    }

    /**
     * Get True, if the administrator can delete messages of other users.
     */
    public function getCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * Set True, if the administrator can delete messages of other users.
     */
    public function setCanDeleteMessages(bool $canDeleteMessages): self
    {
        $this->canDeleteMessages = $canDeleteMessages;

        return $this;
    }

    /**
     * Get True, if the administrator can invite new users to the chat.
     */
    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    /**
     * Set True, if the administrator can invite new users to the chat.
     */
    public function setCanInviteUsers(bool $canInviteUsers): self
    {
        $this->canInviteUsers = $canInviteUsers;

        return $this;
    }

    /**
     * Get True, if the administrator can restrict, ban, or unban chat members or view supergroup statistics; always true for channels.
     */
    public function getCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * Set True, if the administrator can restrict, ban, or unban chat members or view supergroup statistics; always true for channels.
     */
    public function setCanRestrictMembers(bool $canRestrictMembers): self
    {
        $this->canRestrictMembers = $canRestrictMembers;

        return $this;
    }

    /**
     * Get True, if the administrator can pin messages; applicable to basic groups and supergroups only.
     */
    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    /**
     * Set True, if the administrator can pin messages; applicable to basic groups and supergroups only.
     */
    public function setCanPinMessages(bool $canPinMessages): self
    {
        $this->canPinMessages = $canPinMessages;

        return $this;
    }

    /**
     * Get True, if the administrator can create, rename, close, reopen, hide, and unhide forum topics; applicable to forum supergroups only.
     */
    public function getCanManageTopics(): bool
    {
        return $this->canManageTopics;
    }

    /**
     * Set True, if the administrator can create, rename, close, reopen, hide, and unhide forum topics; applicable to forum supergroups only.
     */
    public function setCanManageTopics(bool $canManageTopics): self
    {
        $this->canManageTopics = $canManageTopics;

        return $this;
    }

    /**
     * Get True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that were directly or indirectly promoted by them.
     */
    public function getCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    /**
     * Set True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that were directly or indirectly promoted by them.
     */
    public function setCanPromoteMembers(bool $canPromoteMembers): self
    {
        $this->canPromoteMembers = $canPromoteMembers;

        return $this;
    }

    /**
     * Get True, if the administrator can manage video chats.
     */
    public function getCanManageVideoChats(): bool
    {
        return $this->canManageVideoChats;
    }

    /**
     * Set True, if the administrator can manage video chats.
     */
    public function setCanManageVideoChats(bool $canManageVideoChats): self
    {
        $this->canManageVideoChats = $canManageVideoChats;

        return $this;
    }

    /**
     * Get True, if the administrator can create new chat stories, or edit and delete posted stories; applicable to supergroups and channels only.
     */
    public function getCanPostStories(): bool
    {
        return $this->canPostStories;
    }

    /**
     * Set True, if the administrator can create new chat stories, or edit and delete posted stories; applicable to supergroups and channels only.
     */
    public function setCanPostStories(bool $canPostStories): self
    {
        $this->canPostStories = $canPostStories;

        return $this;
    }

    /**
     * Get True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access story archive; applicable to supergroups and channels only.
     */
    public function getCanEditStories(): bool
    {
        return $this->canEditStories;
    }

    /**
     * Set True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access story archive; applicable to supergroups and channels only.
     */
    public function setCanEditStories(bool $canEditStories): self
    {
        $this->canEditStories = $canEditStories;

        return $this;
    }

    /**
     * Get True, if the administrator can delete stories posted by other users; applicable to supergroups and channels only.
     */
    public function getCanDeleteStories(): bool
    {
        return $this->canDeleteStories;
    }

    /**
     * Set True, if the administrator can delete stories posted by other users; applicable to supergroups and channels only.
     */
    public function setCanDeleteStories(bool $canDeleteStories): self
    {
        $this->canDeleteStories = $canDeleteStories;

        return $this;
    }

    /**
     * Get True, if the administrator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only.
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the administrator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only.
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatAdministratorRights',
            'can_manage_chat' => $this->getCanManageChat(),
            'can_change_info' => $this->getCanChangeInfo(),
            'can_post_messages' => $this->getCanPostMessages(),
            'can_edit_messages' => $this->getCanEditMessages(),
            'can_delete_messages' => $this->getCanDeleteMessages(),
            'can_invite_users' => $this->getCanInviteUsers(),
            'can_restrict_members' => $this->getCanRestrictMembers(),
            'can_pin_messages' => $this->getCanPinMessages(),
            'can_manage_topics' => $this->getCanManageTopics(),
            'can_promote_members' => $this->getCanPromoteMembers(),
            'can_manage_video_chats' => $this->getCanManageVideoChats(),
            'can_post_stories' => $this->getCanPostStories(),
            'can_edit_stories' => $this->getCanEditStories(),
            'can_delete_stories' => $this->getCanDeleteStories(),
            'is_anonymous' => $this->getIsAnonymous(),
        ];
    }
}
