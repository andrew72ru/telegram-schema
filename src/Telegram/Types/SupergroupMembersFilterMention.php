<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns users which can be mentioned in the supergroup @query Query to search for @message_thread_id If non-zero, the identifier of the current message thread
 */
class SupergroupMembersFilterMention extends SupergroupMembersFilter implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('query')]
        private string $query,
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
    ) {
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupMembersFilterMention',
            'query' => $this->getQuery(),
            'message_thread_id' => $this->getMessageThreadId(),
        ];
    }
}
