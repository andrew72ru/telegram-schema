<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payment was done using a third-party payment provider
 */
class PaymentReceiptTypeRegular extends PaymentReceiptType implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the payment provider bot */
        #[SerializedName('payment_provider_user_id')]
        private int $paymentProviderUserId,
        /** Information about the invoice */
        #[SerializedName('invoice')]
        private Invoice|null $invoice = null,
        /** Order information; may be null */
        #[SerializedName('order_info')]
        private OrderInfo|null $orderInfo = null,
        /** Chosen shipping option; may be null */
        #[SerializedName('shipping_option')]
        private ShippingOption|null $shippingOption = null,
        /** Title of the saved credentials chosen by the buyer */
        #[SerializedName('credentials_title')]
        private string $credentialsTitle,
        /** The amount of tip chosen by the buyer in the smallest units of the currency */
        #[SerializedName('tip_amount')]
        private int $tipAmount,
    ) {
    }

    /**
     * Get User identifier of the payment provider bot
     */
    public function getPaymentProviderUserId(): int
    {
        return $this->paymentProviderUserId;
    }

    /**
     * Set User identifier of the payment provider bot
     */
    public function setPaymentProviderUserId(int $paymentProviderUserId): self
    {
        $this->paymentProviderUserId = $paymentProviderUserId;

        return $this;
    }

    /**
     * Get Information about the invoice
     */
    public function getInvoice(): Invoice|null
    {
        return $this->invoice;
    }

    /**
     * Set Information about the invoice
     */
    public function setInvoice(Invoice|null $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get Order information; may be null
     */
    public function getOrderInfo(): OrderInfo|null
    {
        return $this->orderInfo;
    }

    /**
     * Set Order information; may be null
     */
    public function setOrderInfo(OrderInfo|null $orderInfo): self
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * Get Chosen shipping option; may be null
     */
    public function getShippingOption(): ShippingOption|null
    {
        return $this->shippingOption;
    }

    /**
     * Set Chosen shipping option; may be null
     */
    public function setShippingOption(ShippingOption|null $shippingOption): self
    {
        $this->shippingOption = $shippingOption;

        return $this;
    }

    /**
     * Get Title of the saved credentials chosen by the buyer
     */
    public function getCredentialsTitle(): string
    {
        return $this->credentialsTitle;
    }

    /**
     * Set Title of the saved credentials chosen by the buyer
     */
    public function setCredentialsTitle(string $credentialsTitle): self
    {
        $this->credentialsTitle = $credentialsTitle;

        return $this;
    }

    /**
     * Get The amount of tip chosen by the buyer in the smallest units of the currency
     */
    public function getTipAmount(): int
    {
        return $this->tipAmount;
    }

    /**
     * Set The amount of tip chosen by the buyer in the smallest units of the currency
     */
    public function setTipAmount(int $tipAmount): self
    {
        $this->tipAmount = $tipAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentReceiptTypeRegular',
            'payment_provider_user_id' => $this->getPaymentProviderUserId(),
            'invoice' => $this->getInvoice(),
            'order_info' => $this->getOrderInfo(),
            'shipping_option' => $this->getShippingOption(),
            'credentials_title' => $this->getCredentialsTitle(),
            'tip_amount' => $this->getTipAmount(),
        ];
    }
}
