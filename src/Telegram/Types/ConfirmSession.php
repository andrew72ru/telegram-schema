<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Confirms an unconfirmed session of the current user from another device @session_id Session identifier
 */
class ConfirmSession extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('session_id')]
        private int $sessionId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'confirmSession',
            'session_id' => $this->getSessionId(),
        ];
    }
}
