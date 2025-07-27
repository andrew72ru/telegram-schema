<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a withdrawal of earnings.
 */
class ChatRevenueTransactionTypeWithdrawal extends ChatRevenueTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the earnings withdrawal started */
        #[SerializedName('withdrawal_date')]
        private int $withdrawalDate,
        /** Name of the payment provider */
        #[SerializedName('provider')]
        private string $provider,
        /** State of the withdrawal */
        #[SerializedName('state')]
        private RevenueWithdrawalState|null $state = null,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the earnings withdrawal started.
     */
    public function getWithdrawalDate(): int
    {
        return $this->withdrawalDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the earnings withdrawal started.
     */
    public function setWithdrawalDate(int $withdrawalDate): self
    {
        $this->withdrawalDate = $withdrawalDate;

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

    /**
     * Get State of the withdrawal.
     */
    public function getState(): RevenueWithdrawalState|null
    {
        return $this->state;
    }

    /**
     * Set State of the withdrawal.
     */
    public function setState(RevenueWithdrawalState|null $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatRevenueTransactionTypeWithdrawal',
            'withdrawal_date' => $this->getWithdrawalDate(),
            'provider' => $this->getProvider(),
            'state' => $this->getState(),
        ];
    }
}
