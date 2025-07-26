<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for public channel posts containing the given hashtag or cashtag. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
 */
class SearchPublicMessagesByTag extends FoundMessages implements \JsonSerializable
{
    public function __construct(
        /** Hashtag or cashtag to search for */
        #[SerializedName('tag')]
        private string $tag,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Hashtag or cashtag to search for
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set Hashtag or cashtag to search for
     */
    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchPublicMessagesByTag',
            'tag' => $this->getTag(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
