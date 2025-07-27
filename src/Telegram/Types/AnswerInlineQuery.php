<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the result of an inline query; for bots only.
 */
class AnswerInlineQuery extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the inline query */
        #[SerializedName('inline_query_id')]
        private int $inlineQueryId,
        /** Pass true if results may be cached and returned only for the user that sent the query. By default, results may be returned to any user who sends the same query */
        #[SerializedName('is_personal')]
        private bool $isPersonal,
        /** Button to be shown above inline query results; pass null if none */
        #[SerializedName('button')]
        private InlineQueryResultsButton|null $button = null,
        /** The results of the query */
        #[SerializedName('results')]
        private array|null $results = null,
        /** Allowed time to cache the results of the query, in seconds */
        #[SerializedName('cache_time')]
        private int $cacheTime,
        /** Offset for the next inline query; pass an empty string if there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get Identifier of the inline query.
     */
    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    /**
     * Set Identifier of the inline query.
     */
    public function setInlineQueryId(int $inlineQueryId): self
    {
        $this->inlineQueryId = $inlineQueryId;

        return $this;
    }

    /**
     * Get Pass true if results may be cached and returned only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     */
    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    /**
     * Set Pass true if results may be cached and returned only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     */
    public function setIsPersonal(bool $isPersonal): self
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    /**
     * Get Button to be shown above inline query results; pass null if none.
     */
    public function getButton(): InlineQueryResultsButton|null
    {
        return $this->button;
    }

    /**
     * Set Button to be shown above inline query results; pass null if none.
     */
    public function setButton(InlineQueryResultsButton|null $button): self
    {
        $this->button = $button;

        return $this;
    }

    /**
     * Get The results of the query.
     */
    public function getResults(): array|null
    {
        return $this->results;
    }

    /**
     * Set The results of the query.
     */
    public function setResults(array|null $results): self
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get Allowed time to cache the results of the query, in seconds.
     */
    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    /**
     * Set Allowed time to cache the results of the query, in seconds.
     */
    public function setCacheTime(int $cacheTime): self
    {
        $this->cacheTime = $cacheTime;

        return $this;
    }

    /**
     * Get Offset for the next inline query; pass an empty string if there are no more results.
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set Offset for the next inline query; pass an empty string if there are no more results.
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'answerInlineQuery',
            'inline_query_id' => $this->getInlineQueryId(),
            'is_personal' => $this->getIsPersonal(),
            'button' => $this->getButton(),
            'results' => $this->getResults(),
            'cache_time' => $this->getCacheTime(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
