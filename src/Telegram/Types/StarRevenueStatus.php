<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about Telegram Stars earned by a bot or a chat.
 */
class StarRevenueStatus implements \JsonSerializable
{
    public function __construct(
        /** Total amount of Telegram Stars earned */
        #[SerializedName('total_amount')]
        private StarAmount|null $totalAmount = null,
        /** The amount of Telegram Stars that aren't withdrawn yet */
        #[SerializedName('current_amount')]
        private StarAmount|null $currentAmount = null,
        /** The amount of Telegram Stars that are available for withdrawal */
        #[SerializedName('available_amount')]
        private StarAmount|null $availableAmount = null,
        /** True, if Telegram Stars can be withdrawn now or later */
        #[SerializedName('withdrawal_enabled')]
        private bool $withdrawalEnabled,
        /** Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now */
        #[SerializedName('next_withdrawal_in')]
        private int $nextWithdrawalIn,
    ) {
    }

    /**
     * Get Total amount of Telegram Stars earned.
     */
    public function getTotalAmount(): StarAmount|null
    {
        return $this->totalAmount;
    }

    /**
     * Set Total amount of Telegram Stars earned.
     */
    public function setTotalAmount(StarAmount|null $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars that aren't withdrawn yet.
     */
    public function getCurrentAmount(): StarAmount|null
    {
        return $this->currentAmount;
    }

    /**
     * Set The amount of Telegram Stars that aren't withdrawn yet.
     */
    public function setCurrentAmount(StarAmount|null $currentAmount): self
    {
        $this->currentAmount = $currentAmount;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars that are available for withdrawal.
     */
    public function getAvailableAmount(): StarAmount|null
    {
        return $this->availableAmount;
    }

    /**
     * Set The amount of Telegram Stars that are available for withdrawal.
     */
    public function setAvailableAmount(StarAmount|null $availableAmount): self
    {
        $this->availableAmount = $availableAmount;

        return $this;
    }

    /**
     * Get True, if Telegram Stars can be withdrawn now or later.
     */
    public function getWithdrawalEnabled(): bool
    {
        return $this->withdrawalEnabled;
    }

    /**
     * Set True, if Telegram Stars can be withdrawn now or later.
     */
    public function setWithdrawalEnabled(bool $withdrawalEnabled): self
    {
        $this->withdrawalEnabled = $withdrawalEnabled;

        return $this;
    }

    /**
     * Get Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now.
     */
    public function getNextWithdrawalIn(): int
    {
        return $this->nextWithdrawalIn;
    }

    /**
     * Set Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now.
     */
    public function setNextWithdrawalIn(int $nextWithdrawalIn): self
    {
        $this->nextWithdrawalIn = $nextWithdrawalIn;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starRevenueStatus',
            'total_amount' => $this->getTotalAmount(),
            'current_amount' => $this->getCurrentAmount(),
            'available_amount' => $this->getAvailableAmount(),
            'withdrawal_enabled' => $this->getWithdrawalEnabled(),
            'next_withdrawal_in' => $this->getNextWithdrawalIn(),
        ];
    }
}
