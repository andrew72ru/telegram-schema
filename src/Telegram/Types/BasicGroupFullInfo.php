<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains full information about a basic group.
 */
class BasicGroupFullInfo implements \JsonSerializable
{
    public function __construct(
        /** Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo */
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        /** Contains full information about a basic group */
        #[SerializedName('description')]
        private string $description,
        /** User identifier of the creator of the group; 0 if unknown */
        #[SerializedName('creator_user_id')]
        private int $creatorUserId,
        /** Group members */
        #[SerializedName('members')]
        private array|null $members = null,
        /** True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators after upgrading the basic group to a supergroup */
        #[SerializedName('can_hide_members')]
        private bool $canHideMembers,
        /** True, if aggressive anti-spam checks can be enabled or disabled in the supergroup after upgrading the basic group to a supergroup */
        #[SerializedName('can_toggle_aggressive_anti_spam')]
        private bool $canToggleAggressiveAntiSpam,
        /** Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened */
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
        /** List of commands of bots in the group */
        #[SerializedName('bot_commands')]
        private array|null $botCommands = null,
    ) {
    }

    /**
     * Get Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo.
     */
    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Chat photo; may be null if empty or unknown. If non-null, then it is the same photo as in chat.photo.
     */
    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Contains full information about a basic group.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Contains full information about a basic group.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get User identifier of the creator of the group; 0 if unknown.
     */
    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    /**
     * Set User identifier of the creator of the group; 0 if unknown.
     */
    public function setCreatorUserId(int $creatorUserId): self
    {
        $this->creatorUserId = $creatorUserId;

        return $this;
    }

    /**
     * Get Group members.
     */
    public function getMembers(): array|null
    {
        return $this->members;
    }

    /**
     * Set Group members.
     */
    public function setMembers(array|null $members): self
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators after upgrading the basic group to a supergroup.
     */
    public function getCanHideMembers(): bool
    {
        return $this->canHideMembers;
    }

    /**
     * Set True, if non-administrators and non-bots can be hidden in responses to getSupergroupMembers and searchChatMembers for non-administrators after upgrading the basic group to a supergroup.
     */
    public function setCanHideMembers(bool $canHideMembers): self
    {
        $this->canHideMembers = $canHideMembers;

        return $this;
    }

    /**
     * Get True, if aggressive anti-spam checks can be enabled or disabled in the supergroup after upgrading the basic group to a supergroup.
     */
    public function getCanToggleAggressiveAntiSpam(): bool
    {
        return $this->canToggleAggressiveAntiSpam;
    }

    /**
     * Set True, if aggressive anti-spam checks can be enabled or disabled in the supergroup after upgrading the basic group to a supergroup.
     */
    public function setCanToggleAggressiveAntiSpam(bool $canToggleAggressiveAntiSpam): self
    {
        $this->canToggleAggressiveAntiSpam = $canToggleAggressiveAntiSpam;

        return $this;
    }

    /**
     * Get Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened.
     */
    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }

    /**
     * Set Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened.
     */
    public function setInviteLink(ChatInviteLink|null $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get List of commands of bots in the group.
     */
    public function getBotCommands(): array|null
    {
        return $this->botCommands;
    }

    /**
     * Set List of commands of bots in the group.
     */
    public function setBotCommands(array|null $botCommands): self
    {
        $this->botCommands = $botCommands;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'basicGroupFullInfo',
            'photo' => $this->getPhoto(),
            'description' => $this->getDescription(),
            'creator_user_id' => $this->getCreatorUserId(),
            'members' => $this->getMembers(),
            'can_hide_members' => $this->getCanHideMembers(),
            'can_toggle_aggressive_anti_spam' => $this->getCanToggleAggressiveAntiSpam(),
            'invite_link' => $this->getInviteLink(),
            'bot_commands' => $this->getBotCommands(),
        ];
    }
}
