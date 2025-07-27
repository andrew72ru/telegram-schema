<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs server about an in-store purchase of Telegram Premium before authorization. Works only when the current authorization state is authorizationStateWaitPremiumPurchase.
 */
class SetAuthenticationPremiumPurchaseTransaction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Information about the transaction */
        #[SerializedName('transaction')]
        private StoreTransaction|null $transaction = null,
        /** Pass true if this is a restore of a Telegram Premium purchase; only for App Store */
        #[SerializedName('is_restore')]
        private bool $isRestore,
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
    ) {
    }

    /**
     * Get Information about the transaction.
     */
    public function getTransaction(): StoreTransaction|null
    {
        return $this->transaction;
    }

    /**
     * Set Information about the transaction.
     */
    public function setTransaction(StoreTransaction|null $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get Pass true if this is a restore of a Telegram Premium purchase; only for App Store.
     */
    public function getIsRestore(): bool
    {
        return $this->isRestore;
    }

    /**
     * Set Pass true if this is a restore of a Telegram Premium purchase; only for App Store.
     */
    public function setIsRestore(bool $isRestore): self
    {
        $this->isRestore = $isRestore;

        return $this;
    }

    /**
     * Get ISO 4217 currency code of the payment currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAuthenticationPremiumPurchaseTransaction',
            'transaction' => $this->getTransaction(),
            'is_restore' => $this->getIsRestore(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
        ];
    }
}
