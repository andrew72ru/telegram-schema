<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a Telegram Premium gift code created for the user @month_count Number of months the Telegram Premium subscription will be active after code activation.
 */
class PushMessageContentPremiumGiftCode extends PushMessageContent implements \JsonSerializable
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
            '@type' => 'pushMessageContentPremiumGiftCode',
            'month_count' => $this->getMonthCount(),
        ];
    }
}
