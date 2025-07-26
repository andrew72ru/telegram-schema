<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user must buy Telegram Premium as an in-store purchase to log in. Call checkAuthenticationPremiumPurchase and then setAuthenticationPremiumPurchaseTransaction
 */
class AuthorizationStateWaitPremiumPurchase extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the store product that must be bought */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
    ) {
    }

    /**
     * Get Identifier of the store product that must be bought
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the store product that must be bought
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitPremiumPurchase',
            'store_product_id' => $this->getStoreProductId(),
        ];
    }
}
