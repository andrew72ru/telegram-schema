<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an option for buying or upgrading Telegram Premium for self.
 */
class PremiumStatePaymentOption implements \JsonSerializable
{
    public function __construct(
        /** Information about the payment option */
        #[SerializedName('payment_option')]
        private PremiumPaymentOption|null $paymentOption = null,
        /** True, if this is the currently used Telegram Premium subscription option */
        #[SerializedName('is_current')]
        private bool $isCurrent,
        /** True, if the payment option can be used to upgrade the existing Telegram Premium subscription */
        #[SerializedName('is_upgrade')]
        private bool $isUpgrade,
        /** Identifier of the last in-store transaction for the currently used option */
        #[SerializedName('last_transaction_id')]
        private string $lastTransactionId,
    ) {
    }

    /**
     * Get Information about the payment option.
     */
    public function getPaymentOption(): PremiumPaymentOption|null
    {
        return $this->paymentOption;
    }

    /**
     * Set Information about the payment option.
     */
    public function setPaymentOption(PremiumPaymentOption|null $paymentOption): self
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    /**
     * Get True, if this is the currently used Telegram Premium subscription option.
     */
    public function getIsCurrent(): bool
    {
        return $this->isCurrent;
    }

    /**
     * Set True, if this is the currently used Telegram Premium subscription option.
     */
    public function setIsCurrent(bool $isCurrent): self
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * Get True, if the payment option can be used to upgrade the existing Telegram Premium subscription.
     */
    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    /**
     * Set True, if the payment option can be used to upgrade the existing Telegram Premium subscription.
     */
    public function setIsUpgrade(bool $isUpgrade): self
    {
        $this->isUpgrade = $isUpgrade;

        return $this;
    }

    /**
     * Get Identifier of the last in-store transaction for the currently used option.
     */
    public function getLastTransactionId(): string
    {
        return $this->lastTransactionId;
    }

    /**
     * Set Identifier of the last in-store transaction for the currently used option.
     */
    public function setLastTransactionId(string $lastTransactionId): self
    {
        $this->lastTransactionId = $lastTransactionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStatePaymentOption',
            'payment_option' => $this->getPaymentOption(),
            'is_current' => $this->getIsCurrent(),
            'is_upgrade' => $this->getIsUpgrade(),
            'last_transaction_id' => $this->getLastTransactionId(),
        ];
    }
}
