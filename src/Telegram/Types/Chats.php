<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of chats @total_count Approximate total number of chats found @chat_ids List of chat identifiers
 */
class Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
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

    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chats',
            'total_count' => $this->getTotalCount(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
