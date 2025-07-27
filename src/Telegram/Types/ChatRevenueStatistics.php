<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about revenue earned from sponsored messages in a chat.
 */
class ChatRevenueStatistics implements \JsonSerializable
{
    public function __construct(
        /** A graph containing amount of revenue in a given hour */
        #[SerializedName('revenue_by_hour_graph')]
        private StatisticalGraph|null $revenueByHourGraph = null,
        /** A graph containing amount of revenue */
        #[SerializedName('revenue_graph')]
        private StatisticalGraph|null $revenueGraph = null,
        /** Amount of earned revenue */
        #[SerializedName('revenue_amount')]
        private ChatRevenueAmount|null $revenueAmount = null,
        /** Current conversion rate of the cryptocurrency in which revenue is calculated to USD */
        #[SerializedName('usd_rate')]
        private float $usdRate,
    ) {
    }

    /**
     * Get A graph containing amount of revenue in a given hour.
     */
    public function getRevenueByHourGraph(): StatisticalGraph|null
    {
        return $this->revenueByHourGraph;
    }

    /**
     * Set A graph containing amount of revenue in a given hour.
     */
    public function setRevenueByHourGraph(StatisticalGraph|null $revenueByHourGraph): self
    {
        $this->revenueByHourGraph = $revenueByHourGraph;

        return $this;
    }

    /**
     * Get A graph containing amount of revenue.
     */
    public function getRevenueGraph(): StatisticalGraph|null
    {
        return $this->revenueGraph;
    }

    /**
     * Set A graph containing amount of revenue.
     */
    public function setRevenueGraph(StatisticalGraph|null $revenueGraph): self
    {
        $this->revenueGraph = $revenueGraph;

        return $this;
    }

    /**
     * Get Amount of earned revenue.
     */
    public function getRevenueAmount(): ChatRevenueAmount|null
    {
        return $this->revenueAmount;
    }

    /**
     * Set Amount of earned revenue.
     */
    public function setRevenueAmount(ChatRevenueAmount|null $revenueAmount): self
    {
        $this->revenueAmount = $revenueAmount;

        return $this;
    }

    /**
     * Get Current conversion rate of the cryptocurrency in which revenue is calculated to USD.
     */
    public function getUsdRate(): float
    {
        return $this->usdRate;
    }

    /**
     * Set Current conversion rate of the cryptocurrency in which revenue is calculated to USD.
     */
    public function setUsdRate(float $usdRate): self
    {
        $this->usdRate = $usdRate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueStatistics',
            'revenue_by_hour_graph' => $this->getRevenueByHourGraph(),
            'revenue_graph' => $this->getRevenueGraph(),
            'revenue_amount' => $this->getRevenueAmount(),
            'usd_rate' => $this->getUsdRate(),
        ];
    }
}
