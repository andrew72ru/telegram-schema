<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a successful payment.
 */
class PaymentReceipt implements \JsonSerializable
{
    public function __construct(
        /** Information about the product */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
        /** Point in time (Unix timestamp) when the payment was made */
        #[SerializedName('date')]
        private int $date,
        /** User identifier of the seller bot */
        #[SerializedName('seller_bot_user_id')]
        private int $sellerBotUserId,
        /** Type of the payment receipt */
        #[SerializedName('type')]
        private PaymentReceiptType|null $type = null,
    ) {
    }

    /**
     * Get Information about the product.
     */
    public function getProductInfo(): ProductInfo|null
    {
        return $this->productInfo;
    }

    /**
     * Set Information about the product.
     */
    public function setProductInfo(ProductInfo|null $productInfo): self
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the payment was made.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the payment was made.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get User identifier of the seller bot.
     */
    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    /**
     * Set User identifier of the seller bot.
     */
    public function setSellerBotUserId(int $sellerBotUserId): self
    {
        $this->sellerBotUserId = $sellerBotUserId;

        return $this;
    }

    /**
     * Get Type of the payment receipt.
     */
    public function getType(): PaymentReceiptType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the payment receipt.
     */
    public function setType(PaymentReceiptType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentReceipt',
            'product_info' => $this->getProductInfo(),
            'date' => $this->getDate(),
            'seller_bot_user_id' => $this->getSellerBotUserId(),
            'type' => $this->getType(),
        ];
    }
}
