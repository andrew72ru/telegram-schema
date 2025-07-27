<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user creating a Telegram Premium giveaway.
 */
class StorePaymentPurposePremiumGiveaway extends StorePaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** Giveaway parameters */
        #[SerializedName('parameters')]
        private GiveawayParameters|null $parameters = null,
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
    ) {
    }

    /**
     * Get Giveaway parameters.
     */
    public function getParameters(): GiveawayParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Giveaway parameters.
     */
    public function setParameters(GiveawayParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storePaymentPurposePremiumGiveaway',
            'parameters' => $this->getParameters(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
        ];
    }
}
