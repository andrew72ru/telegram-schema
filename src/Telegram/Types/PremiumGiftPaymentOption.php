<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for gifting Telegram Premium to a user. Use telegramPaymentPurposePremiumGift for out-of-store payments or payments in Telegram Stars
 */
class PremiumGiftPaymentOption implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code for the payment */
        #[SerializedName('currency')]
        private string $currency,
        /** The amount to pay, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** The alternative amount of Telegram Stars to pay; 0 if payment in Telegram Stars is not possible */
        #[SerializedName('star_count')]
        private int $starCount,
        /** The discount associated with this option, as a percentage */
        #[SerializedName('discount_percentage')]
        private int $discountPercentage,
        /** Number of months the Telegram Premium subscription will be active */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Identifier of the store product associated with the option */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** A sticker to be shown along with the option; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get ISO 4217 currency code for the payment
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code for the payment
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get The amount to pay, in the smallest units of the currency
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set The amount to pay, in the smallest units of the currency
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get The alternative amount of Telegram Stars to pay; 0 if payment in Telegram Stars is not possible
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The alternative amount of Telegram Stars to pay; 0 if payment in Telegram Stars is not possible
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get The discount associated with this option, as a percentage
     */
    public function getDiscountPercentage(): int
    {
        return $this->discountPercentage;
    }

    /**
     * Set The discount associated with this option, as a percentage
     */
    public function setDiscountPercentage(int $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Identifier of the store product associated with the option
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the store product associated with the option
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    /**
     * Get A sticker to be shown along with the option; may be null if unknown
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set A sticker to be shown along with the option; may be null if unknown
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumGiftPaymentOption',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'star_count' => $this->getStarCount(),
            'discount_percentage' => $this->getDiscountPercentage(),
            'month_count' => $this->getMonthCount(),
            'store_product_id' => $this->getStoreProductId(),
            'sticker' => $this->getSticker(),
        ];
    }
}
