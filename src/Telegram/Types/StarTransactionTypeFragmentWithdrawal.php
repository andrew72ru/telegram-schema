<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a withdrawal of earned Telegram Stars to Fragment; for regular users, bots, supergroup and channel chats only.
 */
class StarTransactionTypeFragmentWithdrawal extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** State of the withdrawal; may be null for refunds from Fragment */
        #[SerializedName('withdrawal_state')]
        private RevenueWithdrawalState|null $withdrawalState = null,
    ) {
    }

    /**
     * Get State of the withdrawal; may be null for refunds from Fragment.
     */
    public function getWithdrawalState(): RevenueWithdrawalState|null
    {
        return $this->withdrawalState;
    }

    /**
     * Set State of the withdrawal; may be null for refunds from Fragment.
     */
    public function setWithdrawalState(RevenueWithdrawalState|null $withdrawalState): self
    {
        $this->withdrawalState = $withdrawalState;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeFragmentWithdrawal',
            'withdrawal_state' => $this->getWithdrawalState(),
        ];
    }
}
