<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new incoming query; for bots only @id The query identifier @data JSON-serialized query data @timeout Query timeout
 */
class UpdateNewCustomQuery extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('id')]
        private int $id,
        #[SerializedName('data')]
        private string $data,
        #[SerializedName('timeout')]
        private int $timeout,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

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

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewCustomQuery',
            'id' => $this->getId(),
            'data' => $this->getData(),
            'timeout' => $this->getTimeout(),
        ];
    }
}
