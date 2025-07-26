<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of a product by the bot; for bots only
 */
class StarTransactionTypeBotInvoiceSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the product */
        #[SerializedName('user_id')]
        private int $userId,
        /** Information about the bought product */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
        /** Invoice payload */
        #[SerializedName('invoice_payload')]
        private string $invoicePayload,
        /** Information about the affiliate which received commission from the transaction; may be null if none */
        #[SerializedName('affiliate')]
        private AffiliateInfo|null $affiliate = null,
    ) {
    }

    /**
     * Get Identifier of the user that bought the product
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that bought the product
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
     * Get Information about the affiliate which received commission from the transaction; may be null if none
     */
    public function getAffiliate(): AffiliateInfo|null
    {
        return $this->affiliate;
    }

    /**
     * Set Information about the affiliate which received commission from the transaction; may be null if none
     */
    public function setAffiliate(AffiliateInfo|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBotInvoiceSale',
            'user_id' => $this->getUserId(),
            'product_info' => $this->getProductInfo(),
            'invoice_payload' => $this->getInvoicePayload(),
            'affiliate' => $this->getAffiliate(),
        ];
    }
}
