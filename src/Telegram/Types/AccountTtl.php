<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the period of inactivity after which the current user's account will automatically be deleted @days Number of days of inactivity before the account will be flagged for deletion; 30-730 days
 */
class AccountTtl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('days')]
        private int $days,
    ) {
    }

    public function getDays(): int
    {
        return $this->days;
    }

    public function setDays(int $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'accountTtl',
            'days' => $this->getDays(),
        ];
    }
}
