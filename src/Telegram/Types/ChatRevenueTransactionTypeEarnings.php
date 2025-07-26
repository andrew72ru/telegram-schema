<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes earnings from sponsored messages in a chat in some time frame
 */
class ChatRevenueTransactionTypeEarnings extends ChatRevenueTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the earnings started */
        #[SerializedName('start_date')]
        private int $startDate,
        /** Point in time (Unix timestamp) when the earnings ended */
        #[SerializedName('end_date')]
        private int $endDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the earnings started
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the earnings started
     */
    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the earnings ended
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the earnings ended
     */
    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueTransactionTypeEarnings',
            'start_date' => $this->getStartDate(),
            'end_date' => $this->getEndDate(),
        ];
    }
}
