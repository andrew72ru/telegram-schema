<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of sessions @sessions List of sessions @inactive_session_ttl_days Number of days of inactivity before sessions will automatically be terminated; 1-366 days.
 */
class Sessions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sessions')]
        private array|null $sessions = null,
        #[SerializedName('inactive_session_ttl_days')]
        private int $inactiveSessionTtlDays,
    ) {
    }

    public function getSessions(): array|null
    {
        return $this->sessions;
    }

    public function setSessions(array|null $sessions): self
    {
        $this->sessions = $sessions;

        return $this;
    }

    public function getInactiveSessionTtlDays(): int
    {
        return $this->inactiveSessionTtlDays;
    }

    public function setInactiveSessionTtlDays(int $inactiveSessionTtlDays): self
    {
        $this->inactiveSessionTtlDays = $inactiveSessionTtlDays;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessions',
            'sessions' => $this->getSessions(),
            'inactive_session_ttl_days' => $this->getInactiveSessionTtlDays(),
        ];
    }
}
