<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about Telegram Stars earned by a bot or a chat.
 */
class StarRevenueStatistics implements \JsonSerializable
{
    public function __construct(
        /** A graph containing amount of revenue in a given day */
        #[SerializedName('revenue_by_day_graph')]
        private StatisticalGraph|null $revenueByDayGraph = null,
        /** Telegram Star revenue status */
        #[SerializedName('status')]
        private StarRevenueStatus|null $status = null,
        /** Current conversion rate of a Telegram Star to USD */
        #[SerializedName('usd_rate')]
        private float $usdRate,
    ) {
    }

    /**
     * Get A graph containing amount of revenue in a given day.
     */
    public function getRevenueByDayGraph(): StatisticalGraph|null
    {
        return $this->revenueByDayGraph;
    }

    /**
     * Set A graph containing amount of revenue in a given day.
     */
    public function setRevenueByDayGraph(StatisticalGraph|null $revenueByDayGraph): self
    {
        $this->revenueByDayGraph = $revenueByDayGraph;

        return $this;
    }

    /**
     * Get Telegram Star revenue status.
     */
    public function getStatus(): StarRevenueStatus|null
    {
        return $this->status;
    }

    /**
     * Set Telegram Star revenue status.
     */
    public function setStatus(StarRevenueStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get Current conversion rate of a Telegram Star to USD.
     */
    public function getUsdRate(): float
    {
        return $this->usdRate;
    }

    /**
     * Set Current conversion rate of a Telegram Star to USD.
     */
    public function setUsdRate(float $usdRate): self
    {
        $this->usdRate = $usdRate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starRevenueStatistics',
            'revenue_by_day_graph' => $this->getRevenueByDayGraph(),
            'status' => $this->getStatus(),
            'usd_rate' => $this->getUsdRate(),
        ];
    }
}
