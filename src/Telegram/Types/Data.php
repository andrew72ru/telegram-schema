<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains some binary data @data Data.
 */
class Data implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('data')]
        private string $data,
    ) {
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
            '@type' => 'data',
            'data' => $this->getData(),
        ];
    }
}
