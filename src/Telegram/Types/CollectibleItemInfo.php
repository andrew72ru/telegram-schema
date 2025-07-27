<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a collectible item and its last purchase.
 */
class CollectibleItemInfo implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the item was purchased */
        #[SerializedName('purchase_date')]
        private int $purchaseDate,
        /** Currency for the paid amount */
        #[SerializedName('currency')]
        private string $currency,
        /** The paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Cryptocurrency used to pay for the item */
        #[SerializedName('cryptocurrency')]
        private string $cryptocurrency,
        /** The paid amount, in the smallest units of the cryptocurrency */
        #[SerializedName('cryptocurrency_amount')]
        private int $cryptocurrencyAmount,
        /** Individual URL for the item on https://fragment.com */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the item was purchased.
     */
    public function getPurchaseDate(): int
    {
        return $this->purchaseDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the item was purchased.
     */
    public function setPurchaseDate(int $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get Currency for the paid amount.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the paid amount.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set The paid amount, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Cryptocurrency used to pay for the item.
     */
    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    /**
     * Set Cryptocurrency used to pay for the item.
     */
    public function setCryptocurrency(string $cryptocurrency): self
    {
        $this->cryptocurrency = $cryptocurrency;

        return $this;
    }

    /**
     * Get The paid amount, in the smallest units of the cryptocurrency.
     */
    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    /**
     * Set The paid amount, in the smallest units of the cryptocurrency.
     */
    public function setCryptocurrencyAmount(int $cryptocurrencyAmount): self
    {
        $this->cryptocurrencyAmount = $cryptocurrencyAmount;

        return $this;
    }

    /**
     * Get Individual URL for the item on https://fragment.com.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set Individual URL for the item on https://fragment.com.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'collectibleItemInfo',
            'purchase_date' => $this->getPurchaseDate(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'cryptocurrency' => $this->getCryptocurrency(),
            'cryptocurrency_amount' => $this->getCryptocurrencyAmount(),
            'url' => $this->getUrl(),
        ];
    }
}
