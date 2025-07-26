<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a date range @start_date Point in time (Unix timestamp) at which the date range begins @end_date Point in time (Unix timestamp) at which the date range ends
 */
class DateRange implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('start_date')]
        private int $startDate,
        #[SerializedName('end_date')]
        private int $endDate,
    ) {
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'dateRange',
            'start_date' => $this->getStartDate(),
            'end_date' => $this->getEndDate(),
        ];
    }
}
