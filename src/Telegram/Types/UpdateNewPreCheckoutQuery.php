<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming pre-checkout query; for bots only. Contains full information about a checkout
 */
class UpdateNewPreCheckoutQuery extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique query identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the user who sent the query */
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
        /** Currency for the product price */
        #[SerializedName('currency')]
        private string $currency,
        /** Total price for the product, in the smallest units of the currency */
        #[SerializedName('total_amount')]
        private int $totalAmount,
        /** Invoice payload */
        #[SerializedName('invoice_payload')]
        private string $invoicePayload,
        /** Identifier of a shipping option chosen by the user; may be empty if not applicable */
        #[SerializedName('shipping_option_id')]
        private string $shippingOptionId,
        /** Information about the order; may be null */
        #[SerializedName('order_info')]
        private OrderInfo|null $orderInfo = null,
    ) {
    }

    /**
     * Get Unique query identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique query identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the user who sent the query
     */
    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    /**
     * Set Identifier of the user who sent the query
     */
    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

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
     * Get Invoice payload
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * Set Invoice payload
     */
    public function setInvoicePayload(string $invoicePayload): self
    {
        $this->invoicePayload = $invoicePayload;

        return $this;
    }

    /**
     * Get Identifier of a shipping option chosen by the user; may be empty if not applicable
     */
    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    /**
     * Set Identifier of a shipping option chosen by the user; may be empty if not applicable
     */
    public function setShippingOptionId(string $shippingOptionId): self
    {
        $this->shippingOptionId = $shippingOptionId;

        return $this;
    }

    /**
     * Get Information about the order; may be null
     */
    public function getOrderInfo(): OrderInfo|null
    {
        return $this->orderInfo;
    }

    /**
     * Set Information about the order; may be null
     */
    public function setOrderInfo(OrderInfo|null $orderInfo): self
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewPreCheckoutQuery',
            'id' => $this->getId(),
            'sender_user_id' => $this->getSenderUserId(),
            'currency' => $this->getCurrency(),
            'total_amount' => $this->getTotalAmount(),
            'invoice_payload' => $this->getInvoicePayload(),
            'shipping_option_id' => $this->getShippingOptionId(),
            'order_info' => $this->getOrderInfo(),
        ];
    }
}
