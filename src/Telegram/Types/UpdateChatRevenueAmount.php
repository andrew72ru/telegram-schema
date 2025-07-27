<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The revenue earned from sponsored messages in a chat has changed. If chat revenue screen is opened, then getChatRevenueTransactions may be called to fetch new transactions.
 */
class UpdateChatRevenueAmount extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New amount of earned revenue */
        #[SerializedName('revenue_amount')]
        private ChatRevenueAmount|null $revenueAmount = null,
    ) {
    }

    /**
     * Get Identifier of the chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New amount of earned revenue.
     */
    public function getRevenueAmount(): ChatRevenueAmount|null
    {
        return $this->revenueAmount;
    }

    /**
     * Set New amount of earned revenue.
     */
    public function setRevenueAmount(ChatRevenueAmount|null $revenueAmount): self
    {
        $this->revenueAmount = $revenueAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatRevenueAmount',
            'chat_id' => $this->getChatId(),
            'revenue_amount' => $this->getRevenueAmount(),
        ];
    }
}
