<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the editable username of a supergroup or channel, requires owner privileges in the supergroup or channel.
 */
class SetSupergroupUsername extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username */
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup or channel.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set New value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setSupergroupUsername',
            'supergroup_id' => $this->getSupergroupId(),
            'username' => $this->getUsername(),
        ];
    }
}
