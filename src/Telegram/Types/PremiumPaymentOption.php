<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for buying Telegram Premium to a user.
 */
class PremiumPaymentOption implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code for Telegram Premium subscription payment */
        #[SerializedName('currency')]
        private string $currency,
        /** The amount to pay, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** The discount associated with this option, as a percentage */
        #[SerializedName('discount_percentage')]
        private int $discountPercentage,
        /** Number of months the Telegram Premium subscription will be active. Use getPremiumInfoSticker to get the sticker to be used as representation of the Telegram Premium subscription */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Identifier of the store product associated with the option */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** An internal link to be opened for buying Telegram Premium to the user if store payment isn't possible; may be null if direct payment isn't available */
        #[SerializedName('payment_link')]
        private InternalLinkType|null $paymentLink = null,
    ) {
    }

    /**
     * Get ISO 4217 currency code for Telegram Premium subscription payment.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code for Telegram Premium subscription payment.
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
     * Get The discount associated with this option, as a percentage.
     */
    public function getDiscountPercentage(): int
    {
        return $this->discountPercentage;
    }

    /**
     * Set The discount associated with this option, as a percentage.
     */
    public function setDiscountPercentage(int $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active. Use getPremiumInfoSticker to get the sticker to be used as representation of the Telegram Premium subscription.
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active. Use getPremiumInfoSticker to get the sticker to be used as representation of the Telegram Premium subscription.
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Identifier of the store product associated with the option.
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the store product associated with the option.
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    /**
     * Get An internal link to be opened for buying Telegram Premium to the user if store payment isn't possible; may be null if direct payment isn't available.
     */
    public function getPaymentLink(): InternalLinkType|null
    {
        return $this->paymentLink;
    }

    /**
     * Set An internal link to be opened for buying Telegram Premium to the user if store payment isn't possible; may be null if direct payment isn't available.
     */
    public function setPaymentLink(InternalLinkType|null $paymentLink): self
    {
        $this->paymentLink = $paymentLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumPaymentOption',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'discount_percentage' => $this->getDiscountPercentage(),
            'month_count' => $this->getMonthCount(),
            'store_product_id' => $this->getStoreProductId(),
            'payment_link' => $this->getPaymentLink(),
        ];
    }
}
