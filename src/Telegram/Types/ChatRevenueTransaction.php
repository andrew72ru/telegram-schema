<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a chat revenue transactions.
 */
class ChatRevenueTransaction implements \JsonSerializable
{
    public function __construct(
        /** Cryptocurrency in which revenue is calculated */
        #[SerializedName('cryptocurrency')]
        private string $cryptocurrency,
        /** The withdrawn amount, in the smallest units of the cryptocurrency */
        #[SerializedName('cryptocurrency_amount')]
        private int $cryptocurrencyAmount,
        /** Type of the transaction */
        #[SerializedName('type')]
        private ChatRevenueTransactionType|null $type = null,
    ) {
    }

    /**
     * Get Cryptocurrency in which revenue is calculated.
     */
    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    /**
     * Set Cryptocurrency in which revenue is calculated.
     */
    public function setCryptocurrency(string $cryptocurrency): self
    {
        $this->cryptocurrency = $cryptocurrency;

        return $this;
    }

    /**
     * Get The withdrawn amount, in the smallest units of the cryptocurrency.
     */
    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    /**
     * Set The withdrawn amount, in the smallest units of the cryptocurrency.
     */
    public function setCryptocurrencyAmount(int $cryptocurrencyAmount): self
    {
        $this->cryptocurrencyAmount = $cryptocurrencyAmount;

        return $this;
    }

    /**
     * Get Type of the transaction.
     */
    public function getType(): ChatRevenueTransactionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the transaction.
     */
    public function setType(ChatRevenueTransactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueTransaction',
            'cryptocurrency' => $this->getCryptocurrency(),
            'cryptocurrency_amount' => $this->getCryptocurrencyAmount(),
            'type' => $this->getType(),
        ];
    }
}
