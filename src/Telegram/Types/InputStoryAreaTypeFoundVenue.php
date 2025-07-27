<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a venue found by the bot getOption("venue_search_bot_username").
 */
class InputStoryAreaTypeFoundVenue extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the inline query, used to found the venue */
        #[SerializedName('query_id')]
        private int $queryId,
        /** Identifier of the inline query result */
        #[SerializedName('result_id')]
        private string $resultId,
    ) {
    }

    /**
     * Get Identifier of the inline query, used to found the venue.
     */
    public function getQueryId(): int
    {
        return $this->queryId;
    }

    /**
     * Set Identifier of the inline query, used to found the venue.
     */
    public function setQueryId(int $queryId): self
    {
        $this->queryId = $queryId;

        return $this;
    }

    /**
     * Get Identifier of the inline query result.
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * Set Identifier of the inline query result.
     */
    public function setResultId(string $resultId): self
    {
        $this->resultId = $resultId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypeFoundVenue',
            'query_id' => $this->getQueryId(),
            'result_id' => $this->getResultId(),
        ];
    }
}
