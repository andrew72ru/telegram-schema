<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members. Use telegramPaymentPurposePremiumGiftCodes or telegramPaymentPurposePremiumGiveaway for out-of-store payments.
 */
class PremiumGiveawayPaymentOption implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code for Telegram Premium gift code payment */
        #[SerializedName('currency')]
        private string $currency,
        /** The amount to pay, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Number of users which will be able to activate the gift codes */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Number of months the Telegram Premium subscription will be active */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Identifier of the store product associated with the option; may be empty if none */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** Number of times the store product must be paid */
        #[SerializedName('store_product_quantity')]
        private int $storeProductQuantity,
    ) {
    }

    /**
     * Get ISO 4217 currency code for Telegram Premium gift code payment.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code for Telegram Premium gift code payment.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get The amount to pay, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set The amount to pay, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Number of users which will be able to activate the gift codes.
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of users which will be able to activate the gift codes.
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active.
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active.
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Identifier of the store product associated with the option; may be empty if none.
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the store product associated with the option; may be empty if none.
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    /**
     * Get Number of times the store product must be paid.
     */
    public function getStoreProductQuantity(): int
    {
        return $this->storeProductQuantity;
    }

    /**
     * Set Number of times the store product must be paid.
     */
    public function setStoreProductQuantity(int $storeProductQuantity): self
    {
        $this->storeProductQuantity = $storeProductQuantity;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumGiveawayPaymentOption',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'winner_count' => $this->getWinnerCount(),
            'month_count' => $this->getMonthCount(),
            'store_product_id' => $this->getStoreProductId(),
            'store_product_quantity' => $this->getStoreProductQuantity(),
        ];
    }
}
