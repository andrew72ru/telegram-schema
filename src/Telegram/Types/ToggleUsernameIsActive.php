<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes active state for a username of the current user. The editable username can't be disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached.
 */
class ToggleUsernameIsActive extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The username to change */
        #[SerializedName('username')]
        private string $username,
        /** Pass true to activate the username; pass false to disable it */
        #[SerializedName('is_active')]
        private bool $isActive,
    ) {
    }

    /**
     * Get The username to change.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set The username to change.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Pass true to activate the username; pass false to disable it.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set Pass true to activate the username; pass false to disable it.
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleUsernameIsActive',
            'username' => $this->getUsername(),
            'is_active' => $this->getIsActive(),
        ];
    }
}
