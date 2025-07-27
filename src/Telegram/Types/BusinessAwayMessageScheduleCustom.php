<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Send away messages only in the specified time span.
 */
class BusinessAwayMessageScheduleCustom extends BusinessAwayMessageSchedule implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the away messages will start to be sent */
        #[SerializedName('start_date')]
        private int $startDate,
        /** Point in time (Unix timestamp) when the away messages will stop to be sent */
        #[SerializedName('end_date')]
        private int $endDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the away messages will start to be sent.
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the away messages will start to be sent.
     */
    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the away messages will stop to be sent.
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the away messages will stop to be sent.
     */
    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessAwayMessageScheduleCustom',
            'start_date' => $this->getStartDate(),
            'end_date' => $this->getEndDate(),
        ];
    }
}
