<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a number of Telegram Stars @star_count Number of Telegram Stars
 */
class StarCount implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starCount',
            'star_count' => $this->getStarCount(),
        ];
    }
}
