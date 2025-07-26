<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with an invoice from a bot. Use getInternalLink with internalLinkTypeBotStart to share the invoice
 */
class MessageInvoice extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Information about the product */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
        /** Currency for the product price */
        #[SerializedName('currency')]
        private string $currency,
        /** Product total price in the smallest units of the currency */
        #[SerializedName('total_amount')]
        private int $totalAmount,
        /** Unique invoice bot start_parameter to be passed to getInternalLink */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** True, if the invoice is a test invoice */
        #[SerializedName('is_test')]
        private bool $isTest,
        /** True, if the shipping address must be specified */
        #[SerializedName('need_shipping_address')]
        private bool $needShippingAddress,
        /** The identifier of the message with the receipt, after the product has been purchased */
        #[SerializedName('receipt_message_id')]
        private int $receiptMessageId,
        /** Extended media attached to the invoice; may be null if none */
        #[SerializedName('paid_media')]
        private PaidMedia|null $paidMedia = null,
        /** Extended media caption; may be null if none */
        #[SerializedName('paid_media_caption')]
        private FormattedText|null $paidMediaCaption = null,
    ) {
    }

    /**
     * Get Information about the product
     */
    public function getProductInfo(): ProductInfo|null
    {
        return $this->productInfo;
    }

    /**
     * Set Information about the product
     */
    public function setProductInfo(ProductInfo|null $productInfo): self
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    /**
     * Get Currency for the product price
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the product price
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Product total price in the smallest units of the currency
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Set Product total price in the smallest units of the currency
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get Unique invoice bot start_parameter to be passed to getInternalLink
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Unique invoice bot start_parameter to be passed to getInternalLink
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get True, if the invoice is a test invoice
     */
    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    /**
     * Set True, if the invoice is a test invoice
     */
    public function setIsTest(bool $isTest): self
    {
        $this->isTest = $isTest;

        return $this;
    }

    /**
     * Get True, if the shipping address must be specified
     */
    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    /**
     * Set True, if the shipping address must be specified
     */
    public function setNeedShippingAddress(bool $needShippingAddress): self
    {
        $this->needShippingAddress = $needShippingAddress;

        return $this;
    }

    /**
     * Get The identifier of the message with the receipt, after the product has been purchased
     */
    public function getReceiptMessageId(): int
    {
        return $this->receiptMessageId;
    }

    /**
     * Set The identifier of the message with the receipt, after the product has been purchased
     */
    public function setReceiptMessageId(int $receiptMessageId): self
    {
        $this->receiptMessageId = $receiptMessageId;

        return $this;
    }

    /**
     * Get Extended media attached to the invoice; may be null if none
     */
    public function getPaidMedia(): PaidMedia|null
    {
        return $this->paidMedia;
    }

    /**
     * Set Extended media attached to the invoice; may be null if none
     */
    public function setPaidMedia(PaidMedia|null $paidMedia): self
    {
        $this->paidMedia = $paidMedia;

        return $this;
    }

    /**
     * Get Extended media caption; may be null if none
     */
    public function getPaidMediaCaption(): FormattedText|null
    {
        return $this->paidMediaCaption;
    }

    /**
     * Set Extended media caption; may be null if none
     */
    public function setPaidMediaCaption(FormattedText|null $paidMediaCaption): self
    {
        $this->paidMediaCaption = $paidMediaCaption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageInvoice',
            'product_info' => $this->getProductInfo(),
            'currency' => $this->getCurrency(),
            'total_amount' => $this->getTotalAmount(),
            'start_parameter' => $this->getStartParameter(),
            'is_test' => $this->getIsTest(),
            'need_shipping_address' => $this->getNeedShippingAddress(),
            'receipt_message_id' => $this->getReceiptMessageId(),
            'paid_media' => $this->getPaidMedia(),
            'paid_media_caption' => $this->getPaidMediaCaption(),
        ];
    }
}
