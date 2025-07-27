<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for outgoing messages with content of the type messageDocument in all chats except secret chats. Returns the results in reverse chronological order.
 */
class SearchOutgoingDocumentMessages extends FoundMessages implements \JsonSerializable
{
    public function __construct(
        /** Query to search for in document file name and message caption */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of messages to be returned; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Query to search for in document file name and message caption.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for in document file name and message caption.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; up to 100.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; up to 100.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchOutgoingDocumentMessages',
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
        ];
    }
}
