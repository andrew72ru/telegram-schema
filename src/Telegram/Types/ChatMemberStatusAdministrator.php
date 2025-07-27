<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is a member of the chat and has some additional privileges. In basic groups, administrators can edit and delete messages sent by others, add new members, ban unprivileged members, and manage video chats.
 */
class ChatMemberStatusAdministrator extends ChatMemberStatus implements \JsonSerializable
{
    public function __construct(
        /** A custom title of the administrator; 0-16 characters without emoji; applicable to supergroups only */
        #[SerializedName('custom_title')]
        private string $customTitle,
        /** True, if the current user can edit the administrator privileges for the called user */
        #[SerializedName('can_be_edited')]
        private bool $canBeEdited,
        /** Rights of the administrator */
        #[SerializedName('rights')]
        private ChatAdministratorRights|null $rights = null,
    ) {
    }

    /**
     * Get A custom title of the administrator; 0-16 characters without emoji; applicable to supergroups only.
     */
    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    /**
     * Set A custom title of the administrator; 0-16 characters without emoji; applicable to supergroups only.
     */
    public function setCustomTitle(string $customTitle): self
    {
        $this->customTitle = $customTitle;

        return $this;
    }

    /**
     * Get True, if the current user can edit the administrator privileges for the called user.
     */
    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    /**
     * Set True, if the current user can edit the administrator privileges for the called user.
     */
    public function setCanBeEdited(bool $canBeEdited): self
    {
        $this->canBeEdited = $canBeEdited;

        return $this;
    }

    /**
     * Get Rights of the administrator.
     */
    public function getRights(): ChatAdministratorRights|null
    {
        return $this->rights;
    }

    /**
     * Set Rights of the administrator.
     */
    public function setRights(ChatAdministratorRights|null $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusAdministrator',
            'custom_title' => $this->getCustomTitle(),
            'can_be_edited' => $this->getCanBeEdited(),
            'rights' => $this->getRights(),
        ];
    }
}
