<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an interval of time when the business is open.
 */
class BusinessOpeningHoursInterval implements \JsonSerializable
{
    public function __construct(
        /** The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0-7*24*60 */
        #[SerializedName('start_minute')]
        private int $startMinute,
        /** The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 1-8*24*60 */
        #[SerializedName('end_minute')]
        private int $endMinute,
    ) {
    }

    /**
     * Get The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0-7*24*60.
     */
    public function getStartMinute(): int
    {
        return $this->startMinute;
    }

    /**
     * Set The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0-7*24*60.
     */
    public function setStartMinute(int $startMinute): self
    {
        $this->startMinute = $startMinute;

        return $this;
    }

    /**
     * Get The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 1-8*24*60.
     */
    public function getEndMinute(): int
    {
        return $this->endMinute;
    }

    /**
     * Set The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 1-8*24*60.
     */
    public function setEndMinute(int $endMinute): self
    {
        $this->endMinute = $endMinute;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessOpeningHoursInterval',
            'start_minute' => $this->getStartMinute(),
            'end_minute' => $this->getEndMinute(),
        ];
    }
}
