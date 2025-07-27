<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an invoice payment form.
 */
class PaymentForm implements \JsonSerializable
{
    public function __construct(
        /** The payment form identifier */
        #[SerializedName('id')]
        private int $id,
        /** Type of the payment form */
        #[SerializedName('type')]
        private PaymentFormType|null $type = null,
        /** User identifier of the seller bot */
        #[SerializedName('seller_bot_user_id')]
        private int $sellerBotUserId,
        /** Information about the product */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
    ) {
    }

    /**
     * Get The payment form identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set The payment form identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Type of the payment form.
     */
    public function getType(): PaymentFormType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the payment form.
     */
    public function setType(PaymentFormType|null $type): self
    {
        $this->type = $type;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentForm',
            'id' => $this->getId(),
            'type' => $this->getType(),
            'seller_bot_user_id' => $this->getSellerBotUserId(),
            'product_info' => $this->getProductInfo(),
        ];
    }
}
