<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A regular gift was received or sent by the current user, or the current user was notified about a channel gift
 */
class MessageGift extends MessageContent implements \JsonSerializable
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
        /** Unique identifier of the received gift for the current user; only for the receiver of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** Message added to the gift */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the receiver */
        #[SerializedName('sell_star_count')]
        private int $sellStarCount,
        /** Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift */
        #[SerializedName('prepaid_upgrade_star_count')]
        private int $prepaidUpgradeStarCount,
        /** True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them */
        #[SerializedName('is_private')]
        private bool $isPrivate,
        /** True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift */
        #[SerializedName('is_saved')]
        private bool $isSaved,
        /** True, if the gift can be upgraded to a unique gift; only for the receiver of the gift */
        #[SerializedName('can_be_upgraded')]
        private bool $canBeUpgraded,
        /** True, if the gift was converted to Telegram Stars; only for the receiver of the gift */
        #[SerializedName('was_converted')]
        private bool $wasConverted,
        /** True, if the gift was upgraded to a unique gift */
        #[SerializedName('was_upgraded')]
        private bool $wasUpgraded,
        /** True, if the gift was refunded and isn't available anymore */
        #[SerializedName('was_refunded')]
        private bool $wasRefunded,
        /** Identifier of the corresponding upgraded gift; may be empty if unknown. Use getReceivedGift to get information about the gift */
        #[SerializedName('upgraded_received_gift_id')]
        private string $upgradedReceivedGiftId,
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
     * Get Unique identifier of the received gift for the current user; only for the receiver of the gift
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Unique identifier of the received gift for the current user; only for the receiver of the gift
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get Message added to the gift
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message added to the gift
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the receiver
     */
    public function getSellStarCount(): int
    {
        return $this->sellStarCount;
    }

    /**
     * Set Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the receiver
     */
    public function setSellStarCount(int $sellStarCount): self
    {
        $this->sellStarCount = $sellStarCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
     */
    public function getPrepaidUpgradeStarCount(): int
    {
        return $this->prepaidUpgradeStarCount;
    }

    /**
     * Set Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
     */
    public function setPrepaidUpgradeStarCount(int $prepaidUpgradeStarCount): self
    {
        $this->prepaidUpgradeStarCount = $prepaidUpgradeStarCount;

        return $this;
    }

    /**
     * Get True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * Set True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift
     */
    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    /**
     * Set True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift
     */
    public function setIsSaved(bool $isSaved): self
    {
        $this->isSaved = $isSaved;

        return $this;
    }

    /**
     * Get True, if the gift can be upgraded to a unique gift; only for the receiver of the gift
     */
    public function getCanBeUpgraded(): bool
    {
        return $this->canBeUpgraded;
    }

    /**
     * Set True, if the gift can be upgraded to a unique gift; only for the receiver of the gift
     */
    public function setCanBeUpgraded(bool $canBeUpgraded): self
    {
        $this->canBeUpgraded = $canBeUpgraded;

        return $this;
    }

    /**
     * Get True, if the gift was converted to Telegram Stars; only for the receiver of the gift
     */
    public function getWasConverted(): bool
    {
        return $this->wasConverted;
    }

    /**
     * Set True, if the gift was converted to Telegram Stars; only for the receiver of the gift
     */
    public function setWasConverted(bool $wasConverted): self
    {
        $this->wasConverted = $wasConverted;

        return $this;
    }

    /**
     * Get True, if the gift was upgraded to a unique gift
     */
    public function getWasUpgraded(): bool
    {
        return $this->wasUpgraded;
    }

    /**
     * Set True, if the gift was upgraded to a unique gift
     */
    public function setWasUpgraded(bool $wasUpgraded): self
    {
        $this->wasUpgraded = $wasUpgraded;

        return $this;
    }

    /**
     * Get True, if the gift was refunded and isn't available anymore
     */
    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
    }

    /**
     * Set True, if the gift was refunded and isn't available anymore
     */
    public function setWasRefunded(bool $wasRefunded): self
    {
        $this->wasRefunded = $wasRefunded;

        return $this;
    }

    /**
     * Get Identifier of the corresponding upgraded gift; may be empty if unknown. Use getReceivedGift to get information about the gift
     */
    public function getUpgradedReceivedGiftId(): string
    {
        return $this->upgradedReceivedGiftId;
    }

    /**
     * Set Identifier of the corresponding upgraded gift; may be empty if unknown. Use getReceivedGift to get information about the gift
     */
    public function setUpgradedReceivedGiftId(string $upgradedReceivedGiftId): self
    {
        $this->upgradedReceivedGiftId = $upgradedReceivedGiftId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGift',
            'gift' => $this->getGift(),
            'sender_id' => $this->getSenderId(),
            'receiver_id' => $this->getReceiverId(),
            'received_gift_id' => $this->getReceivedGiftId(),
            'text' => $this->getText(),
            'sell_star_count' => $this->getSellStarCount(),
            'prepaid_upgrade_star_count' => $this->getPrepaidUpgradeStarCount(),
            'is_private' => $this->getIsPrivate(),
            'is_saved' => $this->getIsSaved(),
            'can_be_upgraded' => $this->getCanBeUpgraded(),
            'was_converted' => $this->getWasConverted(),
            'was_upgraded' => $this->getWasUpgraded(),
            'was_refunded' => $this->getWasRefunded(),
            'upgraded_received_gift_id' => $this->getUpgradedReceivedGiftId(),
        ];
    }
}
