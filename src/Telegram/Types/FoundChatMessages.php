<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of messages found by a search in a given chat @total_count Approximate total number of messages found; -1 if unknown @messages List of messages @next_from_message_id The offset for the next request. If 0, there are no more results.
 */
class FoundChatMessages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('messages')]
        private array|null $messages = null,
        #[SerializedName('next_from_message_id')]
        private int $nextFromMessageId,
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

    public function getNextFromMessageId(): int
    {
        return $this->nextFromMessageId;
    }

    public function setNextFromMessageId(int $nextFromMessageId): self
    {
        $this->nextFromMessageId = $nextFromMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundChatMessages',
            'total_count' => $this->getTotalCount(),
            'messages' => $this->getMessages(),
            'next_from_message_id' => $this->getNextFromMessageId(),
        ];
    }
}
