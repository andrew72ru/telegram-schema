<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of revenue transactions for a chat. Currently, this method can be used only.
 */
class GetChatRevenueTransactions extends ChatRevenueTransactions implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Number of transactions to skip */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of transactions to be returned; up to 200 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Number of transactions to skip.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Number of transactions to skip.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of transactions to be returned; up to 200.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of transactions to be returned; up to 200.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatRevenueTransactions',
            'chat_id' => $this->getChatId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
