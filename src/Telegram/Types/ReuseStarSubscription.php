<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reuses an active Telegram Star subscription to a channel chat and joins the chat again @subscription_id Identifier of the subscription
 */
class ReuseStarSubscription extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('subscription_id')]
        private string $subscriptionId,
    ) {
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reuseStarSubscription',
            'subscription_id' => $this->getSubscriptionId(),
        ];
    }
}
