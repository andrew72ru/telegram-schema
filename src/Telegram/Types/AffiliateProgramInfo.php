<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an active affiliate program.
 */
class AffiliateProgramInfo implements \JsonSerializable
{
    public function __construct(
        /** Parameters of the affiliate program */
        #[SerializedName('parameters')]
        private AffiliateProgramParameters|null $parameters = null,
        /** Point in time (Unix timestamp) when the affiliate program will be closed; 0 if the affiliate program isn't scheduled to be closed. */
        #[SerializedName('end_date')]
        private int $endDate,
        /** The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program */
        #[SerializedName('daily_revenue_per_user_amount')]
        private StarAmount|null $dailyRevenuePerUserAmount = null,
    ) {
    }

    /**
     * Get Parameters of the affiliate program.
     */
    public function getParameters(): AffiliateProgramParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters of the affiliate program.
     */
    public function setParameters(AffiliateProgramParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the affiliate program will be closed; 0 if the affiliate program isn't scheduled to be closed..
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the affiliate program will be closed; 0 if the affiliate program isn't scheduled to be closed..
     */
    public function setEndDate(int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program.
     */
    public function getDailyRevenuePerUserAmount(): StarAmount|null
    {
        return $this->dailyRevenuePerUserAmount;
    }

    /**
     * Set The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program.
     */
    public function setDailyRevenuePerUserAmount(StarAmount|null $dailyRevenuePerUserAmount): self
    {
        $this->dailyRevenuePerUserAmount = $dailyRevenuePerUserAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateProgramInfo',
            'parameters' => $this->getParameters(),
            'end_date' => $this->getEndDate(),
            'daily_revenue_per_user_amount' => $this->getDailyRevenuePerUserAmount(),
        ];
    }
}
