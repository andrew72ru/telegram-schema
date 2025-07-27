<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of message senders @total_count Approximate total number of messages senders found @senders List of message senders.
 */
class MessageSenders implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('senders')]
        private array|null $senders = null,
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

    public function getSenders(): array|null
    {
        return $this->senders;
    }

    public function setSenders(array|null $senders): self
    {
        $this->senders = $senders;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSenders',
            'total_count' => $this->getTotalCount(),
            'senders' => $this->getSenders(),
        ];
    }
}
