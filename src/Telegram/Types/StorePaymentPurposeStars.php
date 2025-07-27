<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user buying Telegram Stars.
 */
class StorePaymentPurposeStars extends StorePaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Number of bought Telegram Stars */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get ISO 4217 currency code of the payment currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Number of bought Telegram Stars.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of bought Telegram Stars.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storePaymentPurposeStars',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
