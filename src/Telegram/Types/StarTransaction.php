<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a transaction changing the amount of owned Telegram Stars
 */
class StarTransaction implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the transaction */
        #[SerializedName('id')]
        private string $id,
        /** The amount of added owned Telegram Stars; negative for outgoing transactions */
        #[SerializedName('star_amount')]
        private StarAmount|null $starAmount = null,
        /** True, if the transaction is a refund of a previous transaction */
        #[SerializedName('is_refund')]
        private bool $isRefund,
        /** Point in time (Unix timestamp) when the transaction was completed */
        #[SerializedName('date')]
        private int $date,
        /** Type of the transaction */
        #[SerializedName('type')]
        private StarTransactionType|null $type = null,
    ) {
    }

    /**
     * Get Unique identifier of the transaction
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the transaction
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The amount of added owned Telegram Stars; negative for outgoing transactions
     */
    public function getStarAmount(): StarAmount|null
    {
        return $this->starAmount;
    }

    /**
     * Set The amount of added owned Telegram Stars; negative for outgoing transactions
     */
    public function setStarAmount(StarAmount|null $starAmount): self
    {
        $this->starAmount = $starAmount;

        return $this;
    }

    /**
     * Get True, if the transaction is a refund of a previous transaction
     */
    public function getIsRefund(): bool
    {
        return $this->isRefund;
    }

    /**
     * Set True, if the transaction is a refund of a previous transaction
     */
    public function setIsRefund(bool $isRefund): self
    {
        $this->isRefund = $isRefund;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the transaction was completed
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the transaction was completed
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Type of the transaction
     */
    public function getType(): StarTransactionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the transaction
     */
    public function setType(StarTransactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransaction',
            'id' => $this->getId(),
            'star_amount' => $this->getStarAmount(),
            'is_refund' => $this->getIsRefund(),
            'date' => $this->getDate(),
            'type' => $this->getType(),
        ];
    }
}
