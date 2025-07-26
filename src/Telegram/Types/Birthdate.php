<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a birthdate of a user @day Day of the month; 1-31 @month Month of the year; 1-12 @year Birth year; 0 if unknown
 */
class Birthdate implements \JsonSerializable
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
            '@type' => 'birthdate',
            'day' => $this->getDay(),
            'month' => $this->getMonth(),
            'year' => $this->getYear(),
        ];
    }
}
