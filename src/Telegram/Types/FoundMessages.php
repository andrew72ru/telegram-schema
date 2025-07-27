<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of messages found by a search @total_count Approximate total number of messages found; -1 if unknown @messages List of messages @next_offset The offset for the next request. If empty, then there are no more results.
 */
class FoundMessages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('messages')]
        private array|null $messages = null,
        #[SerializedName('next_offset')]
        private string $nextOffset,
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

    public function getMessages(): array|null
    {
        return $this->messages;
    }

    public function setMessages(array|null $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundMessages',
            'total_count' => $this->getTotalCount(),
            'messages' => $this->getMessages(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
