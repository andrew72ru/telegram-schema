<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a gift available for resale.
 */
class GiftForResale implements \JsonSerializable
{
    public function __construct(
        /** The gift */
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
        /** Unique identifier of the received gift for the current user; only for the gifts owned by the current user */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
    ) {
    }

    /**
     * Get The gift.
     */
    public function getGift(): UpgradedGift|null
    {
        return $this->gift;
    }

    /**
     * Set The gift.
     */
    public function setGift(UpgradedGift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Unique identifier of the received gift for the current user; only for the gifts owned by the current user.
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Unique identifier of the received gift for the current user; only for the gifts owned by the current user.
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftForResale',
            'gift' => $this->getGift(),
            'received_gift_id' => $this->getReceivedGiftId(),
        ];
    }
}
