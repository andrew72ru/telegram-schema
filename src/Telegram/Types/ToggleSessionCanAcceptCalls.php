<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a session can accept incoming calls @session_id Session identifier @can_accept_calls Pass true to allow accepting incoming calls by the session; pass false otherwise
 */
class ToggleSessionCanAcceptCalls extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('session_id')]
        private int $sessionId,
        #[SerializedName('can_accept_calls')]
        private bool $canAcceptCalls,
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

    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }

    public function setCanAcceptCalls(bool $canAcceptCalls): self
    {
        $this->canAcceptCalls = $canAcceptCalls;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSessionCanAcceptCalls',
            'session_id' => $this->getSessionId(),
            'can_accept_calls' => $this->getCanAcceptCalls(),
        ];
    }
}
