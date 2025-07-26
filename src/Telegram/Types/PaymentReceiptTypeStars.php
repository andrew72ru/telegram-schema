<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payment was done using Telegram Stars
 */
class PaymentReceiptTypeStars extends PaymentReceiptType implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars that were paid */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Unique identifier of the transaction that can be used to dispute it */
        #[SerializedName('transaction_id')]
        private string $transactionId,
    ) {
    }

    /**
     * Get Number of Telegram Stars that were paid
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that were paid
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Unique identifier of the transaction that can be used to dispute it
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Set Unique identifier of the transaction that can be used to dispute it
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentReceiptTypeStars',
            'star_count' => $this->getStarCount(),
            'transaction_id' => $this->getTransactionId(),
        ];
    }
}
