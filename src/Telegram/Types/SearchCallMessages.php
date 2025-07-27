<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for call and group call messages. Returns the results in reverse chronological order (i.e., in order of decreasing message_id). For optimal performance, the number of returned messages is chosen by TDLib.
 */
class SearchCallMessages extends FoundMessages implements \JsonSerializable
{
    public function __construct(
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
        /** Pass true to search only for messages with missed/declined calls */
        #[SerializedName('only_missed')]
        private bool $onlyMissed,
    ) {
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Pass true to search only for messages with missed/declined calls.
     */
    public function getOnlyMissed(): bool
    {
        return $this->onlyMissed;
    }

    /**
     * Set Pass true to search only for messages with missed/declined calls.
     */
    public function setOnlyMissed(bool $onlyMissed): self
    {
        $this->onlyMissed = $onlyMissed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchCallMessages',
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
            'only_missed' => $this->getOnlyMissed(),
        ];
    }
}
