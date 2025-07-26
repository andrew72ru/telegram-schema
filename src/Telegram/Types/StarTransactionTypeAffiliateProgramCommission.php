<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a receiving of a commission from an affiliate program; for regular users, bots and channel chats only
 */
class StarTransactionTypeAffiliateProgramCommission extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that created the affiliate program */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner */
        #[SerializedName('commission_per_mille')]
        private int $commissionPerMille,
    ) {
    }

    /**
     * Get Identifier of the chat that created the affiliate program
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat that created the affiliate program
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * Set The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner
     */
    public function setCommissionPerMille(int $commissionPerMille): self
    {
        $this->commissionPerMille = $commissionPerMille;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeAffiliateProgramCommission',
            'chat_id' => $this->getChatId(),
            'commission_per_mille' => $this->getCommissionPerMille(),
        ];
    }
}
