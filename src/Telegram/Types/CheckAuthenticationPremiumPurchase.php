<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether an in-store purchase of Telegram Premium is possible before authorization. Works only when the current authorization state is authorizationStateWaitPremiumPurchase
 */
class CheckAuthenticationPremiumPurchase extends Ok implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
    ) {
    }

    /**
     * Get ISO 4217 currency code of the payment currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkAuthenticationPremiumPurchase',
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
        ];
    }
}
