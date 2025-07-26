<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of requests to join a chat @total_count Approximate total number of requests found @requests List of the requests
 */
class ChatJoinRequests implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('requests')]
        private array|null $requests = null,
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

    public function getRequests(): array|null
    {
        return $this->requests;
    }

    public function setRequests(array|null $requests): self
    {
        $this->requests = $requests;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatJoinRequests',
            'total_count' => $this->getTotalCount(),
            'requests' => $this->getRequests(),
        ];
    }
}
