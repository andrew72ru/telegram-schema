<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a gift @star_count Number of Telegram Stars that sender paid for the gift
 */
class PushMessageContentGift extends PushMessageContent implements \JsonSerializable
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
            '@type' => 'pushMessageContentGift',
            'star_count' => $this->getStarCount(),
        ];
    }
}
