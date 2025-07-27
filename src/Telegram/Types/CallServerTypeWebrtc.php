<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A WebRTC server.
 */
class CallServerTypeWebrtc extends CallServerType implements \JsonSerializable
{
    public function __construct(
        /** Username to be used for authentication */
        #[SerializedName('username')]
        private string $username,
        /** Authentication password */
        #[SerializedName('password')]
        private string $password,
        /** True, if the server supports TURN */
        #[SerializedName('supports_turn')]
        private bool $supportsTurn,
        /** True, if the server supports STUN */
        #[SerializedName('supports_stun')]
        private bool $supportsStun,
    ) {
    }

    /**
     * Get Username to be used for authentication.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Username to be used for authentication.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Authentication password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set Authentication password.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get True, if the server supports TURN.
     */
    public function getSupportsTurn(): bool
    {
        return $this->supportsTurn;
    }

    /**
     * Set True, if the server supports TURN.
     */
    public function setSupportsTurn(bool $supportsTurn): self
    {
        $this->supportsTurn = $supportsTurn;

        return $this;
    }

    /**
     * Get True, if the server supports STUN.
     */
    public function getSupportsStun(): bool
    {
        return $this->supportsStun;
    }

    /**
     * Set True, if the server supports STUN.
     */
    public function setSupportsStun(bool $supportsStun): self
    {
        $this->supportsStun = $supportsStun;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callServerTypeWebrtc',
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'supports_turn' => $this->getSupportsTurn(),
            'supports_stun' => $this->getSupportsStun(),
        ];
    }
}
