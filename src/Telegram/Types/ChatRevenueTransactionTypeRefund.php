<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a refund for failed withdrawal of earnings.
 */
class ChatRevenueTransactionTypeRefund extends ChatRevenueTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the transaction was refunded */
        #[SerializedName('refund_date')]
        private int $refundDate,
        /** Name of the payment provider */
        #[SerializedName('provider')]
        private string $provider,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the transaction was refunded.
     */
    public function getRefundDate(): int
    {
        return $this->refundDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the transaction was refunded.
     */
    public function setRefundDate(int $refundDate): self
    {
        $this->refundDate = $refundDate;

        return $this;
    }

    /**
     * Get Name of the payment provider.
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * Set Name of the payment provider.
     */
    public function setProvider(string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueTransactionTypeRefund',
            'refund_date' => $this->getRefundDate(),
            'provider' => $this->getProvider(),
        ];
    }
}
