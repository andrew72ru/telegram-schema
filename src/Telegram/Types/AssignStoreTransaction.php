<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs server about an in-store purchase. For official applications only @transaction Information about the transaction @purpose Transaction purpose.
 */
class AssignStoreTransaction extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('transaction')]
        private StoreTransaction|null $transaction = null,
        #[SerializedName('purpose')]
        private StorePaymentPurpose|null $purpose = null,
    ) {
    }

    public function getTransaction(): StoreTransaction|null
    {
        return $this->transaction;
    }

    public function setTransaction(StoreTransaction|null $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
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
            '@type' => 'assignStoreTransaction',
            'transaction' => $this->getTransaction(),
            'purpose' => $this->getPurpose(),
        ];
    }
}
