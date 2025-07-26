<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Product invoice
 */
class Invoice implements \JsonSerializable
{
    public function __construct(
        /** ISO 4217 currency code */
        #[SerializedName('currency')]
        private string $currency,
        /** A list of objects used to calculate the total price of the product */
        #[SerializedName('price_parts')]
        private array|null $priceParts = null,
        /** The number of seconds between consecutive Telegram Star debiting for subscription invoices; 0 if the invoice doesn't create subscription */
        #[SerializedName('subscription_period')]
        private int $subscriptionPeriod,
        /** The maximum allowed amount of tip in the smallest units of the currency */
        #[SerializedName('max_tip_amount')]
        private int $maxTipAmount,
        /** Suggested amounts of tip in the smallest units of the currency */
        #[SerializedName('suggested_tip_amounts')]
        private array|null $suggestedTipAmounts = null,
        /** An HTTP URL with terms of service for recurring payments. If non-empty, the invoice payment will result in recurring payments and the user must accept the terms of service before allowed to pay */
        #[SerializedName('recurring_payment_terms_of_service_url')]
        private string $recurringPaymentTermsOfServiceUrl,
        /** An HTTP URL with terms of service for non-recurring payments. If non-empty, then the user must accept the terms of service before allowed to pay */
        #[SerializedName('terms_of_service_url')]
        private string $termsOfServiceUrl,
        /** True, if the payment is a test payment */
        #[SerializedName('is_test')]
        private bool $isTest,
        /** True, if the user's name is needed for payment */
        #[SerializedName('need_name')]
        private bool $needName,
        /** True, if the user's phone number is needed for payment */
        #[SerializedName('need_phone_number')]
        private bool $needPhoneNumber,
        /** True, if the user's email address is needed for payment */
        #[SerializedName('need_email_address')]
        private bool $needEmailAddress,
        /** True, if the user's shipping address is needed for payment */
        #[SerializedName('need_shipping_address')]
        private bool $needShippingAddress,
        /** True, if the user's phone number will be sent to the provider */
        #[SerializedName('send_phone_number_to_provider')]
        private bool $sendPhoneNumberToProvider,
        /** True, if the user's email address will be sent to the provider */
        #[SerializedName('send_email_address_to_provider')]
        private bool $sendEmailAddressToProvider,
        /** True, if the total price depends on the shipping method */
        #[SerializedName('is_flexible')]
        private bool $isFlexible,
    ) {
    }

    /**
     * Get ISO 4217 currency code
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get A list of objects used to calculate the total price of the product
     */
    public function getPriceParts(): array|null
    {
        return $this->priceParts;
    }

    /**
     * Set A list of objects used to calculate the total price of the product
     */
    public function setPriceParts(array|null $priceParts): self
    {
        $this->priceParts = $priceParts;

        return $this;
    }

    /**
     * Get The number of seconds between consecutive Telegram Star debiting for subscription invoices; 0 if the invoice doesn't create subscription
     */
    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * Set The number of seconds between consecutive Telegram Star debiting for subscription invoices; 0 if the invoice doesn't create subscription
     */
    public function setSubscriptionPeriod(int $subscriptionPeriod): self
    {
        $this->subscriptionPeriod = $subscriptionPeriod;

        return $this;
    }

    /**
     * Get The maximum allowed amount of tip in the smallest units of the currency
     */
    public function getMaxTipAmount(): int
    {
        return $this->maxTipAmount;
    }

    /**
     * Set The maximum allowed amount of tip in the smallest units of the currency
     */
    public function setMaxTipAmount(int $maxTipAmount): self
    {
        $this->maxTipAmount = $maxTipAmount;

        return $this;
    }

    /**
     * Get Suggested amounts of tip in the smallest units of the currency
     */
    public function getSuggestedTipAmounts(): array|null
    {
        return $this->suggestedTipAmounts;
    }

    /**
     * Set Suggested amounts of tip in the smallest units of the currency
     */
    public function setSuggestedTipAmounts(array|null $suggestedTipAmounts): self
    {
        $this->suggestedTipAmounts = $suggestedTipAmounts;

        return $this;
    }

    /**
     * Get An HTTP URL with terms of service for recurring payments. If non-empty, the invoice payment will result in recurring payments and the user must accept the terms of service before allowed to pay
     */
    public function getRecurringPaymentTermsOfServiceUrl(): string
    {
        return $this->recurringPaymentTermsOfServiceUrl;
    }

    /**
     * Set An HTTP URL with terms of service for recurring payments. If non-empty, the invoice payment will result in recurring payments and the user must accept the terms of service before allowed to pay
     */
    public function setRecurringPaymentTermsOfServiceUrl(string $recurringPaymentTermsOfServiceUrl): self
    {
        $this->recurringPaymentTermsOfServiceUrl = $recurringPaymentTermsOfServiceUrl;

        return $this;
    }

    /**
     * Get An HTTP URL with terms of service for non-recurring payments. If non-empty, then the user must accept the terms of service before allowed to pay
     */
    public function getTermsOfServiceUrl(): string
    {
        return $this->termsOfServiceUrl;
    }

    /**
     * Set An HTTP URL with terms of service for non-recurring payments. If non-empty, then the user must accept the terms of service before allowed to pay
     */
    public function setTermsOfServiceUrl(string $termsOfServiceUrl): self
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;

        return $this;
    }

    /**
     * Get True, if the payment is a test payment
     */
    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    /**
     * Set True, if the payment is a test payment
     */
    public function setIsTest(bool $isTest): self
    {
        $this->isTest = $isTest;

        return $this;
    }

    /**
     * Get True, if the user's name is needed for payment
     */
    public function getNeedName(): bool
    {
        return $this->needName;
    }

    /**
     * Set True, if the user's name is needed for payment
     */
    public function setNeedName(bool $needName): self
    {
        $this->needName = $needName;

        return $this;
    }

    /**
     * Get True, if the user's phone number is needed for payment
     */
    public function getNeedPhoneNumber(): bool
    {
        return $this->needPhoneNumber;
    }

    /**
     * Set True, if the user's phone number is needed for payment
     */
    public function setNeedPhoneNumber(bool $needPhoneNumber): self
    {
        $this->needPhoneNumber = $needPhoneNumber;

        return $this;
    }

    /**
     * Get True, if the user's email address is needed for payment
     */
    public function getNeedEmailAddress(): bool
    {
        return $this->needEmailAddress;
    }

    /**
     * Set True, if the user's email address is needed for payment
     */
    public function setNeedEmailAddress(bool $needEmailAddress): self
    {
        $this->needEmailAddress = $needEmailAddress;

        return $this;
    }

    /**
     * Get True, if the user's shipping address is needed for payment
     */
    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    /**
     * Set True, if the user's shipping address is needed for payment
     */
    public function setNeedShippingAddress(bool $needShippingAddress): self
    {
        $this->needShippingAddress = $needShippingAddress;

        return $this;
    }

    /**
     * Get True, if the user's phone number will be sent to the provider
     */
    public function getSendPhoneNumberToProvider(): bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    /**
     * Set True, if the user's phone number will be sent to the provider
     */
    public function setSendPhoneNumberToProvider(bool $sendPhoneNumberToProvider): self
    {
        $this->sendPhoneNumberToProvider = $sendPhoneNumberToProvider;

        return $this;
    }

    /**
     * Get True, if the user's email address will be sent to the provider
     */
    public function getSendEmailAddressToProvider(): bool
    {
        return $this->sendEmailAddressToProvider;
    }

    /**
     * Set True, if the user's email address will be sent to the provider
     */
    public function setSendEmailAddressToProvider(bool $sendEmailAddressToProvider): self
    {
        $this->sendEmailAddressToProvider = $sendEmailAddressToProvider;

        return $this;
    }

    /**
     * Get True, if the total price depends on the shipping method
     */
    public function getIsFlexible(): bool
    {
        return $this->isFlexible;
    }

    /**
     * Set True, if the total price depends on the shipping method
     */
    public function setIsFlexible(bool $isFlexible): self
    {
        $this->isFlexible = $isFlexible;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'invoice',
            'currency' => $this->getCurrency(),
            'price_parts' => $this->getPriceParts(),
            'subscription_period' => $this->getSubscriptionPeriod(),
            'max_tip_amount' => $this->getMaxTipAmount(),
            'suggested_tip_amounts' => $this->getSuggestedTipAmounts(),
            'recurring_payment_terms_of_service_url' => $this->getRecurringPaymentTermsOfServiceUrl(),
            'terms_of_service_url' => $this->getTermsOfServiceUrl(),
            'is_test' => $this->getIsTest(),
            'need_name' => $this->getNeedName(),
            'need_phone_number' => $this->getNeedPhoneNumber(),
            'need_email_address' => $this->getNeedEmailAddress(),
            'need_shipping_address' => $this->getNeedShippingAddress(),
            'send_phone_number_to_provider' => $this->getSendPhoneNumberToProvider(),
            'send_email_address_to_provider' => $this->getSendEmailAddressToProvider(),
            'is_flexible' => $this->getIsFlexible(),
        ];
    }
}
