<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the editable username of a business account; for bots only.
 */
class SetBusinessAccountUsername extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The new value of the username */
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    /**
     * Get Unique identifier of business connection.
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection.
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The new value of the username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set The new value of the username.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessAccountUsername',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'username' => $this->getUsername(),
        ];
    }
}
