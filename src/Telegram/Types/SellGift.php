<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sells a gift for Telegram Stars
 */
class SellGift extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request; for bots only */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Identifier of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sellGift',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'received_gift_id' => $this->getReceivedGiftId(),
        ];
    }
}
