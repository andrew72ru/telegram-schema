<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a filled-out payment form to the bot for final verification
 */
class SendPaymentForm extends PaymentResult implements \JsonSerializable
{
    public function __construct(
        /** The invoice */
        #[SerializedName('input_invoice')]
        private InputInvoice|null $inputInvoice = null,
        /** Payment form identifier returned by getPaymentForm */
        #[SerializedName('payment_form_id')]
        private int $paymentFormId,
        /** Identifier returned by validateOrderInfo, or an empty string */
        #[SerializedName('order_info_id')]
        private string $orderInfoId,
        /** Identifier of a chosen shipping option, if applicable */
        #[SerializedName('shipping_option_id')]
        private string $shippingOptionId,
        /** The credentials chosen by user for payment; pass null for a payment in Telegram Stars */
        #[SerializedName('credentials')]
        private InputCredentials|null $credentials = null,
        /** Chosen by the user amount of tip in the smallest units of the currency */
        #[SerializedName('tip_amount')]
        private int $tipAmount,
    ) {
    }

    /**
     * Get The invoice
     */
    public function getInputInvoice(): InputInvoice|null
    {
        return $this->inputInvoice;
    }

    /**
     * Set The invoice
     */
    public function setInputInvoice(InputInvoice|null $inputInvoice): self
    {
        $this->inputInvoice = $inputInvoice;

        return $this;
    }

    /**
     * Get Payment form identifier returned by getPaymentForm
     */
    public function getPaymentFormId(): int
    {
        return $this->paymentFormId;
    }

    /**
     * Set Payment form identifier returned by getPaymentForm
     */
    public function setPaymentFormId(int $paymentFormId): self
    {
        $this->paymentFormId = $paymentFormId;

        return $this;
    }

    /**
     * Get Identifier returned by validateOrderInfo, or an empty string
     */
    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    /**
     * Set Identifier returned by validateOrderInfo, or an empty string
     */
    public function setOrderInfoId(string $orderInfoId): self
    {
        $this->orderInfoId = $orderInfoId;

        return $this;
    }

    /**
     * Get Identifier of a chosen shipping option, if applicable
     */
    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    /**
     * Set Identifier of a chosen shipping option, if applicable
     */
    public function setShippingOptionId(string $shippingOptionId): self
    {
        $this->shippingOptionId = $shippingOptionId;

        return $this;
    }

    /**
     * Get The credentials chosen by user for payment; pass null for a payment in Telegram Stars
     */
    public function getCredentials(): InputCredentials|null
    {
        return $this->credentials;
    }

    /**
     * Set The credentials chosen by user for payment; pass null for a payment in Telegram Stars
     */
    public function setCredentials(InputCredentials|null $credentials): self
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * Get Chosen by the user amount of tip in the smallest units of the currency
     */
    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }

    /**
     * Set Chosen by the user amount of tip in the smallest units of the currency
     */
    public function setTipAmount(int $tipAmount): self
    {
        $this->tipAmount = $tipAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendPaymentForm',
            'input_invoice' => $this->getInputInvoice(),
            'payment_form_id' => $this->getPaymentFormId(),
            'order_info_id' => $this->getOrderInfoId(),
            'shipping_option_id' => $this->getShippingOptionId(),
            'credentials' => $this->getCredentials(),
            'tip_amount' => $this->getTipAmount(),
        ];
    }
}
