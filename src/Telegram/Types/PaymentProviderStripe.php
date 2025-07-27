<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stripe payment provider.
 */
class PaymentProviderStripe extends PaymentProvider implements \JsonSerializable
{
    public function __construct(
        /** Stripe API publishable key */
        #[SerializedName('publishable_key')]
        private string $publishableKey,
        /** True, if the user country must be provided */
        #[SerializedName('need_country')]
        private bool $needCountry,
        /** True, if the user ZIP/postal code must be provided */
        #[SerializedName('need_postal_code')]
        private bool $needPostalCode,
        /** True, if the cardholder name must be provided */
        #[SerializedName('need_cardholder_name')]
        private bool $needCardholderName,
    ) {
    }

    /**
     * Get Stripe API publishable key.
     */
    public function getPublishableKey(): string
    {
        return $this->publishableKey;
    }

    /**
     * Set Stripe API publishable key.
     */
    public function setPublishableKey(string $publishableKey): self
    {
        $this->publishableKey = $publishableKey;

        return $this;
    }

    /**
     * Get True, if the user country must be provided.
     */
    public function getNeedCountry(): bool
    {
        return $this->needCountry;
    }

    /**
     * Set True, if the user country must be provided.
     */
    public function setNeedCountry(bool $needCountry): self
    {
        $this->needCountry = $needCountry;

        return $this;
    }

    /**
     * Get True, if the user ZIP/postal code must be provided.
     */
    public function getNeedPostalCode(): bool
    {
        return $this->needPostalCode;
    }

    /**
     * Set True, if the user ZIP/postal code must be provided.
     */
    public function setNeedPostalCode(bool $needPostalCode): self
    {
        $this->needPostalCode = $needPostalCode;

        return $this;
    }

    /**
     * Get True, if the cardholder name must be provided.
     */
    public function getNeedCardholderName(): bool
    {
        return $this->needCardholderName;
    }

    /**
     * Set True, if the cardholder name must be provided.
     */
    public function setNeedCardholderName(bool $needCardholderName): self
    {
        $this->needCardholderName = $needCardholderName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentProviderStripe',
            'publishable_key' => $this->getPublishableKey(),
            'need_country' => $this->getNeedCountry(),
            'need_postal_code' => $this->getNeedPostalCode(),
            'need_cardholder_name' => $this->getNeedCardholderName(),
        ];
    }
}
