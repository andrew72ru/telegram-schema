<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user subscribing to Telegram Premium @is_restore Pass true if this is a restore of a Telegram Premium purchase; only for App Store @is_upgrade Pass true if this is an upgrade from a monthly subscription to early subscription; only for App Store
 */
class StorePaymentPurposePremiumSubscription extends StorePaymentPurpose implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_restore')]
        private bool $isRestore,
        #[SerializedName('is_upgrade')]
        private bool $isUpgrade,
    ) {
    }

    public function getIsRestore(): bool
    {
        return $this->isRestore;
    }

    public function setIsRestore(bool $isRestore): self
    {
        $this->isRestore = $isRestore;

        return $this;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function setIsUpgrade(bool $isUpgrade): self
    {
        $this->isUpgrade = $isUpgrade;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storePaymentPurposePremiumSubscription',
            'is_restore' => $this->getIsRestore(),
            'is_upgrade' => $this->getIsUpgrade(),
        ];
    }
}
