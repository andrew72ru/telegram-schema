<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes usernames assigned to a user, a supergroup, or a channel
 */
class Usernames implements \JsonSerializable
{
    public function __construct(
        /** List of active usernames; the first one must be shown as the primary username. The order of active usernames can be changed with reorderActiveUsernames, reorderBotActiveUsernames or reorderSupergroupActiveUsernames */
        #[SerializedName('active_usernames')]
        private array|null $activeUsernames = null,
        /** List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive */
        #[SerializedName('disabled_usernames')]
        private array|null $disabledUsernames = null,
        /** The active username, which can be changed with setUsername or setSupergroupUsername. Information about other active usernames can be received using getCollectibleItemInfo */
        #[SerializedName('editable_username')]
        private string $editableUsername,
    ) {
    }

    /**
     * Get List of active usernames; the first one must be shown as the primary username. The order of active usernames can be changed with reorderActiveUsernames, reorderBotActiveUsernames or reorderSupergroupActiveUsernames
     */
    public function getActiveUsernames(): array|null
    {
        return $this->activeUsernames;
    }

    /**
     * Set List of active usernames; the first one must be shown as the primary username. The order of active usernames can be changed with reorderActiveUsernames, reorderBotActiveUsernames or reorderSupergroupActiveUsernames
     */
    public function setActiveUsernames(array|null $activeUsernames): self
    {
        $this->activeUsernames = $activeUsernames;

        return $this;
    }

    /**
     * Get List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive
     */
    public function getDisabledUsernames(): array|null
    {
        return $this->disabledUsernames;
    }

    /**
     * Set List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive
     */
    public function setDisabledUsernames(array|null $disabledUsernames): self
    {
        $this->disabledUsernames = $disabledUsernames;

        return $this;
    }

    /**
     * Get The active username, which can be changed with setUsername or setSupergroupUsername. Information about other active usernames can be received using getCollectibleItemInfo
     */
    public function getEditableUsername(): string
    {
        return $this->editableUsername;
    }

    /**
     * Set The active username, which can be changed with setUsername or setSupergroupUsername. Information about other active usernames can be received using getCollectibleItemInfo
     */
    public function setEditableUsername(string $editableUsername): self
    {
        $this->editableUsername = $editableUsername;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'usernames',
            'active_usernames' => $this->getActiveUsernames(),
            'disabled_usernames' => $this->getDisabledUsernames(),
            'editable_username' => $this->getEditableUsername(),
        ];
    }
}
