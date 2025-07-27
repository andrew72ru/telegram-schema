<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of a subscription to a channel chat by the current user; for regular users only.
 */
class StarTransactionTypeChannelSubscriptionPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat that created the subscription */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The number of seconds between consecutive Telegram Star debitings */
        #[SerializedName('subscription_period')]
        private int $subscriptionPeriod,
    ) {
    }

    /**
     * Get Identifier of the channel chat that created the subscription.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat that created the subscription.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeChannelSubscriptionPurchase',
            'chat_id' => $this->getChatId(),
            'subscription_period' => $this->getSubscriptionPeriod(),
        ];
    }
}
