<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about revenue earned from sponsored messages in a chat
 */
class ChatRevenueAmount implements \JsonSerializable
{
    public function __construct(
        /** Cryptocurrency in which revenue is calculated */
        #[SerializedName('cryptocurrency')]
        private string $cryptocurrency,
        /** Total amount of the cryptocurrency earned, in the smallest units of the cryptocurrency */
        #[SerializedName('total_amount')]
        private int $totalAmount,
        /** Amount of the cryptocurrency that isn't withdrawn yet, in the smallest units of the cryptocurrency */
        #[SerializedName('balance_amount')]
        private int $balanceAmount,
        /** Amount of the cryptocurrency available for withdrawal, in the smallest units of the cryptocurrency */
        #[SerializedName('available_amount')]
        private int $availableAmount,
        /** True, if Telegram Stars can be withdrawn now or later */
        #[SerializedName('withdrawal_enabled')]
        private bool $withdrawalEnabled,
    ) {
    }

    /**
     * Get Cryptocurrency in which revenue is calculated
     */
    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    /**
     * Set Cryptocurrency in which revenue is calculated
     */
    public function setCryptocurrency(string $cryptocurrency): self
    {
        $this->cryptocurrency = $cryptocurrency;

        return $this;
    }

    /**
     * Get Total amount of the cryptocurrency earned, in the smallest units of the cryptocurrency
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Set Total amount of the cryptocurrency earned, in the smallest units of the cryptocurrency
     */
    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get Amount of the cryptocurrency that isn't withdrawn yet, in the smallest units of the cryptocurrency
     */
    public function getBalanceAmount(): int
    {
        return $this->balanceAmount;
    }

    /**
     * Set Amount of the cryptocurrency that isn't withdrawn yet, in the smallest units of the cryptocurrency
     */
    public function setBalanceAmount(int $balanceAmount): self
    {
        $this->balanceAmount = $balanceAmount;

        return $this;
    }

    /**
     * Get Amount of the cryptocurrency available for withdrawal, in the smallest units of the cryptocurrency
     */
    public function getAvailableAmount(): int
    {
        return $this->availableAmount;
    }

    /**
     * Set Amount of the cryptocurrency available for withdrawal, in the smallest units of the cryptocurrency
     */
    public function setAvailableAmount(int $availableAmount): self
    {
        $this->availableAmount = $availableAmount;

        return $this;
    }

    /**
     * Get True, if Telegram Stars can be withdrawn now or later
     */
    public function getWithdrawalEnabled(): bool
    {
        return $this->withdrawalEnabled;
    }

    /**
     * Set True, if Telegram Stars can be withdrawn now or later
     */
    public function setWithdrawalEnabled(bool $withdrawalEnabled): self
    {
        $this->withdrawalEnabled = $withdrawalEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueAmount',
            'cryptocurrency' => $this->getCryptocurrency(),
            'total_amount' => $this->getTotalAmount(),
            'balance_amount' => $this->getBalanceAmount(),
            'available_amount' => $this->getAvailableAmount(),
            'withdrawal_enabled' => $this->getWithdrawalEnabled(),
        ];
    }
}
