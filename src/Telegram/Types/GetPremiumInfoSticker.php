<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the sticker to be used as representation of the Telegram Premium subscription @month_count Number of months the Telegram Premium subscription will be active.
 */
class GetPremiumInfoSticker extends Sticker implements \JsonSerializable
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
            '@type' => 'getPremiumInfoSticker',
            'month_count' => $this->getMonthCount(),
        ];
    }
}
