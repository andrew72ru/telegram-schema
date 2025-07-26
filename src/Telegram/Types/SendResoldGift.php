<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends an upgraded gift that is available for resale to another user or channel chat; gifts already owned by the current user
 */
class SendResoldGift extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Name of the upgraded gift to send */
        #[SerializedName('gift_name')]
        private string $giftName,
        /** Identifier of the user or the channel chat that will receive the gift */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** The amount of Telegram Stars required to pay for the gift */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Name of the upgraded gift to send
     */
    public function getGiftName(): string
    {
        return $this->giftName;
    }

    /**
     * Set Name of the upgraded gift to send
     */
    public function setGiftName(string $giftName): self
    {
        $this->giftName = $giftName;

        return $this;
    }

    /**
     * Get Identifier of the user or the channel chat that will receive the gift
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the user or the channel chat that will receive the gift
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars required to pay for the gift
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The amount of Telegram Stars required to pay for the gift
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendResoldGift',
            'gift_name' => $this->getGiftName(),
            'owner_id' => $this->getOwnerId(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
