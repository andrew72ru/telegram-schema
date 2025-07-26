<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents the results of the inline query. Use sendInlineQueryResultMessage to send the result of the query
 */
class InlineQueryResults implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the inline query */
        #[SerializedName('inline_query_id')]
        private int $inlineQueryId,
        /** Button to be shown above inline query results; may be null */
        #[SerializedName('button')]
        private InlineQueryResultsButton|null $button = null,
        /** Results of the query */
        #[SerializedName('results')]
        private array|null $results = null,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Unique identifier of the inline query
     */
    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    /**
     * Set Unique identifier of the inline query
     */
    public function setInlineQueryId(int $inlineQueryId): self
    {
        $this->inlineQueryId = $inlineQueryId;

        return $this;
    }

    /**
     * Get Button to be shown above inline query results; may be null
     */
    public function getButton(): InlineQueryResultsButton|null
    {
        return $this->button;
    }

    /**
     * Set Button to be shown above inline query results; may be null
     */
    public function setButton(InlineQueryResultsButton|null $button): self
    {
        $this->button = $button;

        return $this;
    }

    /**
     * Get Results of the query
     */
    public function getResults(): array|null
    {
        return $this->results;
    }

    /**
     * Set Results of the query
     */
    public function setResults(array|null $results): self
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResults',
            'inline_query_id' => $this->getInlineQueryId(),
            'button' => $this->getButton(),
            'results' => $this->getResults(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
