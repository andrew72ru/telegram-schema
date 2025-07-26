<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Cancels or re-enables Telegram Star subscription
 */
class EditStarSubscription extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the subscription to change */
        #[SerializedName('subscription_id')]
        private string $subscriptionId,
        /** New value of is_canceled */
        #[SerializedName('is_canceled')]
        private bool $isCanceled,
    ) {
    }

    /**
     * Get Identifier of the subscription to change
     */
    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    /**
     * Set Identifier of the subscription to change
     */
    public function setSubscriptionId(string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get New value of is_canceled
     */
    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    /**
     * Set New value of is_canceled
     */
    public function setIsCanceled(bool $isCanceled): self
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editStarSubscription',
            'subscription_id' => $this->getSubscriptionId(),
            'is_canceled' => $this->getIsCanceled(),
        ];
    }
}
