<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to extend their expiring Telegram Premium subscription @manage_premium_subscription_url A URL for managing Telegram Premium subscription
 */
class SuggestedActionExtendPremium extends SuggestedAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('manage_premium_subscription_url')]
        private string $managePremiumSubscriptionUrl,
    ) {
    }

    public function getManagePremiumSubscriptionUrl(): string
    {
        return $this->managePremiumSubscriptionUrl;
    }

    public function setManagePremiumSubscriptionUrl(string $managePremiumSubscriptionUrl): self
    {
        $this->managePremiumSubscriptionUrl = $managePremiumSubscriptionUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionExtendPremium',
            'manage_premium_subscription_url' => $this->getManagePremiumSubscriptionUrl(),
        ];
    }
}
