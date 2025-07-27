<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat revenue transactions @total_count Total number of transactions @transactions List of transactions.
 */
class ChatRevenueTransactions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('transactions')]
        private array|null $transactions = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getTransactions(): array|null
    {
        return $this->transactions;
    }

    public function setTransactions(array|null $transactions): self
    {
        $this->transactions = $transactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueTransactions',
            'total_count' => $this->getTotalCount(),
            'transactions' => $this->getTransactions(),
        ];
    }
}
