<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the editable username of the current user
 */
class SetUsername extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The new value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username */
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    /**
     * Get The new value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set The new value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setUsername',
            'username' => $this->getUsername(),
        ];
    }
}
