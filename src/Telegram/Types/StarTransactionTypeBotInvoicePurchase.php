<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of a product from a bot or a business account by the current user; for regular users only
 */
class StarTransactionTypeBotInvoicePurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot or the business account user that created the invoice */
        #[SerializedName('user_id')]
        private int $userId,
        /** Information about the bought product */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
    ) {
    }

    /**
     * Get Identifier of the bot or the business account user that created the invoice
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the bot or the business account user that created the invoice
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Information about the bought product
     */
    public function getProductInfo(): ProductInfo|null
    {
        return $this->productInfo;
    }

    /**
     * Set Information about the bought product
     */
    public function setProductInfo(ProductInfo|null $productInfo): self
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBotInvoicePurchase',
            'user_id' => $this->getUserId(),
            'product_info' => $this->getProductInfo(),
        ];
    }
}
