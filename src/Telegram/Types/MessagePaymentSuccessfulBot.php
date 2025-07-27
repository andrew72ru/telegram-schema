<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A payment has been received by the bot or the business account.
 */
class MessagePaymentSuccessfulBot extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Currency for price of the product */
        #[SerializedName('currency')]
        private string $currency,
        /** Total price for the product, in the smallest units of the currency */
        #[SerializedName('total_amount')]
        private int $totalAmount,
        /** Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring */
        #[SerializedName('subscription_until_date')]
        private int $subscriptionUntilDate,
        /** True, if this is a recurring payment */
        #[SerializedName('is_recurring')]
        private bool $isRecurring,
        /** True, if this is the first recurring payment */
        #[SerializedName('is_first_recurring')]
        private bool $isFirstRecurring,
        /** Invoice payload */
        #[SerializedName('invoice_payload')]
        private string $invoicePayload,
        /** Identifier of the shipping option chosen by the user; may be empty if not applicable; for bots only */
        #[SerializedName('shipping_option_id')]
        private string $shippingOptionId,
        /** Information about the order; may be null; for bots only */
        #[SerializedName('order_info')]
        private OrderInfo|null $orderInfo = null,
        /** Telegram payment identifier */
        #[SerializedName('telegram_payment_charge_id')]
        private string $telegramPaymentChargeId,
        /** Provider payment identifier */
        #[SerializedName('provider_payment_charge_id')]
        private string $providerPaymentChargeId,
    ) {
    }

    /**
     * Get Currency for price of the product.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for price of the product.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Total price for the product, in the smallest units of the currency.
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Set Total price for the product, in the smallest units of the currency.
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
     */
    public function getSubscriptionUntilDate(): int
    {
        return $this->subscriptionUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
     */
    public function setSubscriptionUntilDate(int $subscriptionUntilDate): self
    {
        $this->subscriptionUntilDate = $subscriptionUntilDate;

        return $this;
    }

    /**
     * Get True, if this is a recurring payment.
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    /**
     * Set True, if this is a recurring payment.
     */
    public function setIsRecurring(bool $isRecurring): self
    {
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * Get True, if this is the first recurring payment.
     */
    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    /**
     * Set True, if this is the first recurring payment.
     */
    public function setIsFirstRecurring(bool $isFirstRecurring): self
    {
        $this->isFirstRecurring = $isFirstRecurring;

        return $this;
    }

    /**
     * Get Invoice payload.
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * Set Invoice payload.
     */
    public function setInvoicePayload(string $invoicePayload): self
    {
        $this->invoicePayload = $invoicePayload;

        return $this;
    }

    /**
     * Get Identifier of the shipping option chosen by the user; may be empty if not applicable; for bots only.
     */
    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    /**
     * Set Identifier of the shipping option chosen by the user; may be empty if not applicable; for bots only.
     */
    public function setShippingOptionId(string $shippingOptionId): self
    {
        $this->shippingOptionId = $shippingOptionId;

        return $this;
    }

    /**
     * Get Information about the order; may be null; for bots only.
     */
    public function getOrderInfo(): OrderInfo|null
    {
        return $this->orderInfo;
    }

    /**
     * Set Information about the order; may be null; for bots only.
     */
    public function setOrderInfo(OrderInfo|null $orderInfo): self
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * Get Telegram payment identifier.
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * Set Telegram payment identifier.
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): self
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;

        return $this;
    }

    /**
     * Get Provider payment identifier.
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    /**
     * Set Provider payment identifier.
     */
    public function setProviderPaymentChargeId(string $providerPaymentChargeId): self
    {
        $this->providerPaymentChargeId = $providerPaymentChargeId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaymentSuccessfulBot',
            'currency' => $this->getCurrency(),
            'total_amount' => $this->getTotalAmount(),
            'subscription_until_date' => $this->getSubscriptionUntilDate(),
            'is_recurring' => $this->getIsRecurring(),
            'is_first_recurring' => $this->getIsFirstRecurring(),
            'invoice_payload' => $this->getInvoicePayload(),
            'shipping_option_id' => $this->getShippingOptionId(),
            'order_info' => $this->getOrderInfo(),
            'telegram_payment_charge_id' => $this->getTelegramPaymentChargeId(),
            'provider_payment_charge_id' => $this->getProviderPaymentChargeId(),
        ];
    }
}
