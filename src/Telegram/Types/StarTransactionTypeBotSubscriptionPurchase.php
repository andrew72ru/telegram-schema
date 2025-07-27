<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of a subscription from a bot or a business account by the current user; for regular users only.
 */
class StarTransactionTypeBotSubscriptionPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot or the business account user that created the subscription link */
        #[SerializedName('user_id')]
        private int $userId,
        /** The number of seconds between consecutive Telegram Star debitings */
        #[SerializedName('subscription_period')]
        private int $subscriptionPeriod,
        /** Information about the bought subscription */
        #[SerializedName('product_info')]
        private ProductInfo|null $productInfo = null,
    ) {
    }

    /**
     * Get Identifier of the bot or the business account user that created the subscription link.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the bot or the business account user that created the subscription link.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The number of seconds between consecutive Telegram Star debitings.
     */
    public function getSubscriptionPeriod(): int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * Set The number of seconds between consecutive Telegram Star debitings.
     */
    public function setSubscriptionPeriod(int $subscriptionPeriod): self
    {
        $this->subscriptionPeriod = $subscriptionPeriod;

        return $this;
    }

    /**
     * Get Information about the bought subscription.
     */
    public function getProductInfo(): ProductInfo|null
    {
        return $this->productInfo;
    }

    /**
     * Set Information about the bought subscription.
     */
    public function setProductInfo(ProductInfo|null $productInfo): self
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBotSubscriptionPurchase',
            'user_id' => $this->getUserId(),
            'subscription_period' => $this->getSubscriptionPeriod(),
            'product_info' => $this->getProductInfo(),
        ];
    }
}
