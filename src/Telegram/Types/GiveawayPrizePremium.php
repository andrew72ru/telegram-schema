<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The giveaway sends Telegram Premium subscriptions to the winners @month_count Number of months the Telegram Premium subscription will be active after code activation
 */
class GiveawayPrizePremium extends GiveawayPrize implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('month_count')]
        private int $monthCount,
    ) {
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayPrizePremium',
            'month_count' => $this->getMonthCount(),
        ];
    }
}
