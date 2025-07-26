<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A purchase through App Store @receipt App Store receipt
 */
class StoreTransactionAppStore extends StoreTransaction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('receipt')]
        private string $receipt,
    ) {
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function setReceipt(string $receipt): self
    {
        $this->receipt = $receipt;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storeTransactionAppStore',
            'receipt' => $this->getReceipt(),
        ];
    }
}
