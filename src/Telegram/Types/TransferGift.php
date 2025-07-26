<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends an upgraded gift to another user or a channel chat
 */
class TransferGift extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request; for bots only */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Identifier of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** Identifier of the user or the channel chat that will receive the gift */
        #[SerializedName('new_owner_id')]
        private MessageSender|null $newOwnerId = null,
        /** The amount of Telegram Stars required to pay for the transfer */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Identifier of the gift
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Identifier of the gift
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get Identifier of the user or the channel chat that will receive the gift
     */
    public function getNewOwnerId(): MessageSender|null
    {
        return $this->newOwnerId;
    }

    /**
     * Set Identifier of the user or the channel chat that will receive the gift
     */
    public function setNewOwnerId(MessageSender|null $newOwnerId): self
    {
        $this->newOwnerId = $newOwnerId;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars required to pay for the transfer
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The amount of Telegram Stars required to pay for the transfer
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'transferGift',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'received_gift_id' => $this->getReceivedGiftId(),
            'new_owner_id' => $this->getNewOwnerId(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
