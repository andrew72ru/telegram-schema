<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The giveaway sends Telegram Stars to the winners @star_count Number of Telegram Stars that will be shared by all winners.
 */
class GiveawayPrizeStars extends GiveawayPrize implements \JsonSerializable
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
            '@type' => 'giveawayPrizeStars',
            'star_count' => $this->getStarCount(),
        ];
    }
}
