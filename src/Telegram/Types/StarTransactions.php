<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of Telegram Star transactions.
 */
class StarTransactions implements \JsonSerializable
{
    public function __construct(
        /** The amount of owned Telegram Stars */
        #[SerializedName('star_amount')]
        private StarAmount|null $starAmount = null,
        /** List of transactions with Telegram Stars */
        #[SerializedName('transactions')]
        private array|null $transactions = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get The amount of owned Telegram Stars.
     */
    public function getStarAmount(): StarAmount|null
    {
        return $this->starAmount;
    }

    /**
     * Set The amount of owned Telegram Stars.
     */
    public function setStarAmount(StarAmount|null $starAmount): self
    {
        $this->starAmount = $starAmount;

        return $this;
    }

    /**
     * Get List of transactions with Telegram Stars.
     */
    public function getTransactions(): array|null
    {
        return $this->transactions;
    }

    /**
     * Set List of transactions with Telegram Stars.
     */
    public function setTransactions(array|null $transactions): self
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results.
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results.
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactions',
            'star_amount' => $this->getStarAmount(),
            'transactions' => $this->getTransactions(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
