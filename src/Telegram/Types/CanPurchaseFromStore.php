<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether an in-store purchase is possible. Must be called before any in-store purchase. For official applications only @purpose Transaction purpose.
 */
class CanPurchaseFromStore extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('purpose')]
        private StorePaymentPurpose|null $purpose = null,
    ) {
    }

    public function getPurpose(): StorePaymentPurpose|null
    {
        return $this->purpose;
    }

    public function setPurpose(StorePaymentPurpose|null $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPurchaseFromStore',
            'purpose' => $this->getPurpose(),
        ];
    }
}
