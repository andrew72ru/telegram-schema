<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes resale price of a unique gift owned by the current user
 */
class SetGiftResalePrice extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the unique gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** The new price for the unique gift; 0 or getOption("gift_resale_star_count_min")-getOption("gift_resale_star_count_max"). Pass 0 to disallow gift resale. */
        #[SerializedName('resale_star_count')]
        private int $resaleStarCount,
    ) {
    }

    /**
     * Get Identifier of the unique gift
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Identifier of the unique gift
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get The new price for the unique gift; 0 or getOption("gift_resale_star_count_min")-getOption("gift_resale_star_count_max"). Pass 0 to disallow gift resale.
     */
    public function getResaleStarCount(): int
    {
        return $this->resaleStarCount;
    }

    /**
     * Set The new price for the unique gift; 0 or getOption("gift_resale_star_count_min")-getOption("gift_resale_star_count_max"). Pass 0 to disallow gift resale.
     */
    public function setResaleStarCount(int $resaleStarCount): self
    {
        $this->resaleStarCount = $resaleStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setGiftResalePrice',
            'received_gift_id' => $this->getReceivedGiftId(),
            'resale_star_count' => $this->getResaleStarCount(),
        ];
    }
}
