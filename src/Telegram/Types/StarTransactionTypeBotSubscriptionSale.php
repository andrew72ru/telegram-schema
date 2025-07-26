<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of a subscription by the bot; for bots only
 */
class StarTransactionTypeBotSubscriptionSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the subscription */
        #[SerializedName('user_id')]
        private int $userId,
        /** The number of seconds between consecutive Telegram Star debitings */
        #[SerializedName('subscription_period')]
        private int $subscriptionPeriod,
        /** Information about the bought subscription */
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
     * Get Identifier of the user that bought the subscription
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that bought the subscription
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The number of seconds between consecutive Telegram Star debitings
     */
    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * Set The number of seconds between consecutive Telegram Star debitings
     */
    public function setSubscriptionPeriod(int $subscriptionPeriod): self
    {
        $this->subscriptionPeriod = $subscriptionPeriod;

        return $this;
    }

    /**
     * Get Information about the bought subscription
     */
    public function getProductInfo(): ProductInfo|null
    {
        return $this->productInfo;
    }

    /**
     * Set Information about the bought subscription
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
            '@type' => 'starTransactionTypeBotSubscriptionSale',
            'user_id' => $this->getUserId(),
            'subscription_period' => $this->getSubscriptionPeriod(),
            'product_info' => $this->getProductInfo(),
            'invoice_payload' => $this->getInvoicePayload(),
            'affiliate' => $this->getAffiliate(),
        ];
    }
}
