<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes active state for a username of a supergroup or channel, requires owner privileges in the supergroup or channel. The editable username can't be disabled.
 */
class ToggleSupergroupUsernameIsActive extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The username to change */
        #[SerializedName('username')]
        private string $username,
        /** Pass true to activate the username; pass false to disable it */
        #[SerializedName('is_active')]
        private bool $isActive,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup or channel
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The username to change
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set The username to change
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Pass true to activate the username; pass false to disable it
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set Pass true to activate the username; pass false to disable it
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupUsernameIsActive',
            'supergroup_id' => $this->getSupergroupId(),
            'username' => $this->getUsername(),
            'is_active' => $this->getIsActive(),
        ];
    }
}
