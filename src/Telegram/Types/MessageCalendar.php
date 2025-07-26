<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about found messages, split by days according to the option "utc_time_offset" @total_count Total number of found messages @days Information about messages sent
 */
class MessageCalendar implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('days')]
        private array|null $days = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getDays(): array|null
    {
        return $this->days;
    }

    public function setDays(array|null $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageCalendar',
            'total_count' => $this->getTotalCount(),
            'days' => $this->getDays(),
        ];
    }
}
