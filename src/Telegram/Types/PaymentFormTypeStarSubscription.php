<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payment form is for a payment in Telegram Stars for subscription @pricing Information about subscription plan.
 */
class PaymentFormTypeStarSubscription extends PaymentFormType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('pricing')]
        private StarSubscriptionPricing|null $pricing = null,
    ) {
    }

    public function getPricing(): StarSubscriptionPricing|null
    {
        return $this->pricing;
    }

    public function setPricing(StarSubscriptionPricing|null $pricing): self
    {
        $this->pricing = $pricing;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentFormTypeStarSubscription',
            'pricing' => $this->getPricing(),
        ];
    }
}
