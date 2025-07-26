<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of messages @total_count Approximate total number of messages found @messages List of messages; messages may be null
 */
class Messages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('messages')]
        private array|null $messages = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messages',
            'total_count' => $this->getTotalCount(),
            'messages' => $this->getMessages(),
        ];
    }
}
