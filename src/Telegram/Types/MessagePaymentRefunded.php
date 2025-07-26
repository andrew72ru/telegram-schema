<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A payment has been refunded
 */
class MessagePaymentRefunded extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the previous owner of the Telegram Stars that refunds them */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** Currency for the price of the product */
        #[SerializedName('currency')]
        private string $currency,
        /** Total price for the product, in the smallest units of the currency */
        #[SerializedName('total_amount')]
        private int $totalAmount,
        /** Invoice payload; only for bots */
        #[SerializedName('invoice_payload')]
        private string $invoicePayload,
        /** Telegram payment identifier */
        #[SerializedName('telegram_payment_charge_id')]
        private string $telegramPaymentChargeId,
        /** Provider payment identifier */
        #[SerializedName('provider_payment_charge_id')]
        private string $providerPaymentChargeId,
    ) {
    }

    /**
     * Get Identifier of the previous owner of the Telegram Stars that refunds them
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the previous owner of the Telegram Stars that refunds them
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get Currency for the price of the product
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set Currency for the price of the product
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Total price for the product, in the smallest units of the currency
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Set Total price for the product, in the smallest units of the currency
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get Invoice payload; only for bots
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * Set Invoice payload; only for bots
     */
    public function setInvoicePayload(string $invoicePayload): self
    {
        $this->invoicePayload = $invoicePayload;

        return $this;
    }

    /**
     * Get Telegram payment identifier
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * Set Telegram payment identifier
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): self
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;

        return $this;
    }

    /**
     * Get Provider payment identifier
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    /**
     * Set Provider payment identifier
     */
    public function setProviderPaymentChargeId(string $providerPaymentChargeId): self
    {
        $this->providerPaymentChargeId = $providerPaymentChargeId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaymentRefunded',
            'owner_id' => $this->getOwnerId(),
            'currency' => $this->getCurrency(),
            'total_amount' => $this->getTotalAmount(),
            'invoice_payload' => $this->getInvoicePayload(),
            'telegram_payment_charge_id' => $this->getTelegramPaymentChargeId(),
            'provider_payment_charge_id' => $this->getProviderPaymentChargeId(),
        ];
    }
}
