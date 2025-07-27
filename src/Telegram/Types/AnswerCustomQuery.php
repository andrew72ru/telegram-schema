<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Answers a custom query; for bots only @custom_query_id Identifier of a custom query @data JSON-serialized answer to the query.
 */
class AnswerCustomQuery extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('custom_query_id')]
        private int $customQueryId,
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    public function getCustomQueryId(): int
    {
        return $this->customQueryId;
    }

    public function setCustomQueryId(int $customQueryId): self
    {
        $this->customQueryId = $customQueryId;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'answerCustomQuery',
            'custom_query_id' => $this->getCustomQueryId(),
            'data' => $this->getData(),
        ];
    }
}
