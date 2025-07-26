<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a counter @count Count
 */
class Count implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('count')]
        private int $count,
    ) {
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'count',
            'count' => $this->getCount(),
        ];
    }
}
