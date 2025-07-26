<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a date according to the Gregorian calendar @day Day of the month; 1-31 @month Month; 1-12 @year Year; 1-9999
 */
class Date implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('day')]
        private int $day,
        #[SerializedName('month')]
        private int $month,
        #[SerializedName('year')]
        private int $year,
    ) {
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month): self
    {
        $this->month = $month;

        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'date',
            'day' => $this->getDay(),
            'month' => $this->getMonth(),
            'year' => $this->getYear(),
        ];
    }
}
