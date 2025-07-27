<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for buying Telegram Stars. Use telegramPaymentPurposeStars for out-of-store payments.
 */
class StarPaymentOption implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code for the payment */
        #[SerializedName('currency')]
        private string $currency,
        /** The amount to pay, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Number of Telegram Stars that will be purchased */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Identifier of the store product associated with the option; may be empty if none */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** True, if the option must be shown only in the full list of payment options */
        #[SerializedName('is_additional')]
        private bool $isAdditional,
    ) {
    }

    /**
     * Get ISO 4217 currency code for the payment.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code for the payment.
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
     * Get Number of Telegram Stars that will be purchased.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that will be purchased.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

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
     * Get True, if the option must be shown only in the full list of payment options.
     */
    public function getIsAdditional(): bool
    {
        return $this->isAdditional;
    }

    /**
     * Set True, if the option must be shown only in the full list of payment options.
     */
    public function setIsAdditional(bool $isAdditional): self
    {
        $this->isAdditional = $isAdditional;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starPaymentOption',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'star_count' => $this->getStarCount(),
            'store_product_id' => $this->getStoreProductId(),
            'is_additional' => $this->getIsAdditional(),
        ];
    }
}
