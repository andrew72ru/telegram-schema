<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the period of inactivity after which sessions will automatically be terminated @inactive_session_ttl_days New number of days of inactivity before sessions will be automatically terminated; 1-366 days
 */
class SetInactiveSessionTtl extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('inactive_session_ttl_days')]
        private int $inactiveSessionTtlDays,
    ) {
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
            '@type' => 'setInactiveSessionTtl',
            'inactive_session_ttl_days' => $this->getInactiveSessionTtlDays(),
        ];
    }
}
