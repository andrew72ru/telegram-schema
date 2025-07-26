<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A purchase through Google Play
 */
class StoreTransactionGooglePlay extends StoreTransaction implements \JsonSerializable
{
    public function __construct(
        /** Application package name */
        #[SerializedName('package_name')]
        private string $packageName,
        /** Identifier of the purchased store product */
        #[SerializedName('store_product_id')]
        private string $storeProductId,
        /** Google Play purchase token */
        #[SerializedName('purchase_token')]
        private string $purchaseToken,
    ) {
    }

    /**
     * Get Application package name
     */
    public function getPackageName(): string
    {
        return $this->packageName;
    }

    /**
     * Set Application package name
     */
    public function setPackageName(string $packageName): self
    {
        $this->packageName = $packageName;

        return $this;
    }

    /**
     * Get Identifier of the purchased store product
     */
    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    /**
     * Set Identifier of the purchased store product
     */
    public function setStoreProductId(string $storeProductId): self
    {
        $this->storeProductId = $storeProductId;

        return $this;
    }

    /**
     * Get Google Play purchase token
     */
    public function getPurchaseToken(): string
    {
        return $this->purchaseToken;
    }

    /**
     * Set Google Play purchase token
     */
    public function setPurchaseToken(string $purchaseToken): self
    {
        $this->purchaseToken = $purchaseToken;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storeTransactionGooglePlay',
            'package_name' => $this->getPackageName(),
            'store_product_id' => $this->getStoreProductId(),
            'purchase_token' => $this->getPurchaseToken(),
        ];
    }
}
