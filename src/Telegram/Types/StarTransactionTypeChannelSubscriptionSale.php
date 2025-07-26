<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of a subscription by the channel chat; for channel chats only
 */
class StarTransactionTypeChannelSubscriptionSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the subscription */
        #[SerializedName('user_id')]
        private int $userId,
        /** The number of seconds between consecutive Telegram Star debitings */
        #[SerializedName('subscription_period')]
        private int $subscriptionPeriod,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelSubscriptionSale',
            'user_id' => $this->getUserId(),
            'subscription_period' => $this->getSubscriptionPeriod(),
        ];
    }
}
