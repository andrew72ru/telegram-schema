<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a session can accept incoming secret chats @session_id Session identifier @can_accept_secret_chats Pass true to allow accepting secret chats by the session; pass false otherwise
 */
class ToggleSessionCanAcceptSecretChats extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('session_id')]
        private int $sessionId,
        #[SerializedName('can_accept_secret_chats')]
        private bool $canAcceptSecretChats,
    ) {
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function setSessionId(int $sessionId): self
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }

    public function setCanAcceptSecretChats(bool $canAcceptSecretChats): self
    {
        $this->canAcceptSecretChats = $canAcceptSecretChats;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSessionCanAcceptSecretChats',
            'session_id' => $this->getSessionId(),
            'can_accept_secret_chats' => $this->getCanAcceptSecretChats(),
        ];
    }
}
