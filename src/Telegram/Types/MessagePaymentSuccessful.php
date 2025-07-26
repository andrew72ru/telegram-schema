<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A payment has been sent to a bot or a business account
 */
class MessagePaymentSuccessful extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat, containing the corresponding invoice message */
        #[SerializedName('invoice_chat_id')]
        private int $invoiceChatId,
        /** Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message */
        #[SerializedName('invoice_message_id')]
        private int $invoiceMessageId,
        /** Currency for the price of the product */
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
        /** Name of the invoice; may be empty if unknown */
        #[SerializedName('invoice_name')]
        private string $invoiceName,
    ) {
    }

    /**
     * Get Identifier of the chat, containing the corresponding invoice message
     */
    public function getInvoiceChatId(): int
    {
        return $this->invoiceChatId;
    }

    /**
     * Set Identifier of the chat, containing the corresponding invoice message
     */
    public function setInvoiceChatId(int $invoiceChatId): self
    {
        $this->invoiceChatId = $invoiceChatId;

        return $this;
    }

    /**
     * Get Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message
     */
    public function getInvoiceMessageId(): int
    {
        return $this->invoiceMessageId;
    }

    /**
     * Set Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message
     */
    public function setInvoiceMessageId(int $invoiceMessageId): self
    {
        $this->invoiceMessageId = $invoiceMessageId;

        return $this;
    }

    /**
     * Get Currency for the price of the product
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the price of the product
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Total price for the product, in the smallest units of the currency
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Set Total price for the product, in the smallest units of the currency
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring
     */
    public function getSubscriptionUntilDate(): int
    {
        return $this->subscriptionUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring
     */
    public function setSubscriptionUntilDate(int $subscriptionUntilDate): self
    {
        $this->subscriptionUntilDate = $subscriptionUntilDate;

        return $this;
    }

    /**
     * Get True, if this is a recurring payment
     */
    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    /**
     * Set True, if this is a recurring payment
     */
    public function setIsRecurring(bool $isRecurring): self
    {
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * Get True, if this is the first recurring payment
     */
    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    /**
     * Set True, if this is the first recurring payment
     */
    public function setIsFirstRecurring(bool $isFirstRecurring): self
    {
        $this->isFirstRecurring = $isFirstRecurring;

        return $this;
    }

    /**
     * Get Name of the invoice; may be empty if unknown
     */
    public function getInvoiceName(): string
    {
        return $this->invoiceName;
    }

    /**
     * Set Name of the invoice; may be empty if unknown
     */
    public function setInvoiceName(string $invoiceName): self
    {
        $this->invoiceName = $invoiceName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaymentSuccessful',
            'invoice_chat_id' => $this->getInvoiceChatId(),
            'invoice_message_id' => $this->getInvoiceMessageId(),
            'currency' => $this->getCurrency(),
            'total_amount' => $this->getTotalAmount(),
            'subscription_until_date' => $this->getSubscriptionUntilDate(),
            'is_recurring' => $this->getIsRecurring(),
            'is_first_recurring' => $this->getIsFirstRecurring(),
            'invoice_name' => $this->getInvoiceName(),
        ];
    }
}
