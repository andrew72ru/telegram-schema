<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for creating of Telegram Star giveaway. Use telegramPaymentPurposeStarGiveaway for out-of-store payments
 */
class StarGiveawayPaymentOption implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code for the payment */
        #[SerializedName('currency')]
        private string $currency,
        /** The amount to pay, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Number of Telegram Stars that will be distributed among winners */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Identifier of the store product associated with the option; may be empty if none */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** Number of times the chat will be boosted for one year if the option is chosen */
        #[SerializedName('yearly_boost_count')]
        private int $yearlyBoostCount,
        /** Allowed options for the number of giveaway winners */
        #[SerializedName('winner_options')]
        private array|null $winnerOptions = null,
        /** True, if the option must be chosen by default */
        #[SerializedName('is_default')]
        private bool $isDefault,
        /** True, if the option must be shown only in the full list of payment options */
        #[SerializedName('is_additional')]
        private bool $isAdditional,
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
     * Get Number of Telegram Stars that will be distributed among winners
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that will be distributed among winners
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Identifier of the store product associated with the option; may be empty if none
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the store product associated with the option; may be empty if none
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    /**
     * Get Number of times the chat will be boosted for one year if the option is chosen
     */
    public function getYearlyBoostCount(): int
    {
        return $this->yearlyBoostCount;
    }

    /**
     * Set Number of times the chat will be boosted for one year if the option is chosen
     */
    public function setYearlyBoostCount(int $yearlyBoostCount): self
    {
        $this->yearlyBoostCount = $yearlyBoostCount;

        return $this;
    }

    /**
     * Get Allowed options for the number of giveaway winners
     */
    public function getWinnerOptions(): array|null
    {
        return $this->winnerOptions;
    }

    /**
     * Set Allowed options for the number of giveaway winners
     */
    public function setWinnerOptions(array|null $winnerOptions): self
    {
        $this->winnerOptions = $winnerOptions;

        return $this;
    }

    /**
     * Get True, if the option must be chosen by default
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * Set True, if the option must be chosen by default
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get True, if the option must be shown only in the full list of payment options
     */
    public function getIsAdditional(): bool
    {
        return $this->isAdditional;
    }

    /**
     * Set True, if the option must be shown only in the full list of payment options
     */
    public function setIsAdditional(bool $isAdditional): self
    {
        $this->isAdditional = $isAdditional;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starGiveawayPaymentOption',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'star_count' => $this->getStarCount(),
            'store_product_id' => $this->getStoreProductId(),
            'yearly_boost_count' => $this->getYearlyBoostCount(),
            'winner_options' => $this->getWinnerOptions(),
            'is_default' => $this->getIsDefault(),
            'is_additional' => $this->getIsAdditional(),
        ];
    }
}
