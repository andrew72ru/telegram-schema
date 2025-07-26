<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A gift which purchase, upgrade or transfer were refunded
 */
class MessageRefundedUpgradedGift extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The gift */
        #[SerializedName('gift')]
        private Gift|null $gift = null,
        /** Sender of the gift */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Receiver of the gift */
        #[SerializedName('receiver_id')]
        private MessageSender|null $receiverId = null,
        /** True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift */
        #[SerializedName('is_upgrade')]
        private bool $isUpgrade,
    ) {
    }

    /**
     * Get The gift
     */
    public function getGift(): Gift|null
    {
        return $this->gift;
    }

    /**
     * Set The gift
     */
    public function setGift(Gift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Sender of the gift
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Sender of the gift
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get Receiver of the gift
     */
    public function getReceiverId(): MessageSender|null
    {
        return $this->receiverId;
    }

    /**
     * Set Receiver of the gift
     */
    public function setReceiverId(MessageSender|null $receiverId): self
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    /**
     * Get True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift
     */
    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    /**
     * Set True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift
     */
    public function setIsUpgrade(bool $isUpgrade): self
    {
        $this->isUpgrade = $isUpgrade;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageRefundedUpgradedGift',
            'gift' => $this->getGift(),
            'sender_id' => $this->getSenderId(),
            'receiver_id' => $this->getReceiverId(),
            'is_upgrade' => $this->getIsUpgrade(),
        ];
    }
}
