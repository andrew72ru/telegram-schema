<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An upgraded gift was received or sent by the current user, or the current user was notified about a channel gift
 */
class MessageUpgradedGift extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The gift */
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
        /** Sender of the gift; may be null for anonymous gifts */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Receiver of the gift */
        #[SerializedName('receiver_id')]
        private MessageSender|null $receiverId = null,
        /** Unique identifier of the received gift for the current user; only for the receiver of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift */
        #[SerializedName('is_upgrade')]
        private bool $isUpgrade,
        /** True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift */
        #[SerializedName('is_saved')]
        private bool $isSaved,
        /** True, if the gift can be transferred to another owner; only for the receiver of the gift */
        #[SerializedName('can_be_transferred')]
        private bool $canBeTransferred,
        /** True, if the gift was transferred to another owner; only for the receiver of the gift */
        #[SerializedName('was_transferred')]
        private bool $wasTransferred,
        /** Number of Telegram Stars that were paid by the sender for the gift; 0 if the gift was upgraded or transferred */
        #[SerializedName('last_resale_star_count')]
        private int $lastResaleStarCount,
        /** Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift */
        #[SerializedName('transfer_star_count')]
        private int $transferStarCount,
        /** Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift */
        #[SerializedName('next_transfer_date')]
        private int $nextTransferDate,
        /** Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift */
        #[SerializedName('next_resale_date')]
        private int $nextResaleDate,
        /** Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift */
        #[SerializedName('export_date')]
        private int $exportDate,
    ) {
    }

    /**
     * Get The gift
     */
    public function getGift(): UpgradedGift|null
    {
        return $this->gift;
    }

    /**
     * Set The gift
     */
    public function setGift(UpgradedGift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Sender of the gift; may be null for anonymous gifts
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Sender of the gift; may be null for anonymous gifts
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
     * Get True, if the gift can be transferred to another owner; only for the receiver of the gift
     */
    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    /**
     * Set True, if the gift can be transferred to another owner; only for the receiver of the gift
     */
    public function setCanBeTransferred(bool $canBeTransferred): self
    {
        $this->canBeTransferred = $canBeTransferred;

        return $this;
    }

    /**
     * Get True, if the gift was transferred to another owner; only for the receiver of the gift
     */
    public function getWasTransferred(): bool
    {
        return $this->wasTransferred;
    }

    /**
     * Set True, if the gift was transferred to another owner; only for the receiver of the gift
     */
    public function setWasTransferred(bool $wasTransferred): self
    {
        $this->wasTransferred = $wasTransferred;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that were paid by the sender for the gift; 0 if the gift was upgraded or transferred
     */
    public function getLastResaleStarCount(): int
    {
        return $this->lastResaleStarCount;
    }

    /**
     * Set Number of Telegram Stars that were paid by the sender for the gift; 0 if the gift was upgraded or transferred
     */
    public function setLastResaleStarCount(int $lastResaleStarCount): self
    {
        $this->lastResaleStarCount = $lastResaleStarCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift
     */
    public function getTransferStarCount(): int
    {
        return $this->transferStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift
     */
    public function setTransferStarCount(int $transferStarCount): self
    {
        $this->transferStarCount = $transferStarCount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift
     */
    public function getNextTransferDate(): int
    {
        return $this->nextTransferDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift
     */
    public function setNextTransferDate(int $nextTransferDate): self
    {
        $this->nextTransferDate = $nextTransferDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift
     */
    public function getNextResaleDate(): int
    {
        return $this->nextResaleDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift
     */
    public function setNextResaleDate(int $nextResaleDate): self
    {
        $this->nextResaleDate = $nextResaleDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift
     */
    public function getExportDate(): int
    {
        return $this->exportDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift
     */
    public function setExportDate(int $exportDate): self
    {
        $this->exportDate = $exportDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageUpgradedGift',
            'gift' => $this->getGift(),
            'sender_id' => $this->getSenderId(),
            'receiver_id' => $this->getReceiverId(),
            'received_gift_id' => $this->getReceivedGiftId(),
            'is_upgrade' => $this->getIsUpgrade(),
            'is_saved' => $this->getIsSaved(),
            'can_be_transferred' => $this->getCanBeTransferred(),
            'was_transferred' => $this->getWasTransferred(),
            'last_resale_star_count' => $this->getLastResaleStarCount(),
            'transfer_star_count' => $this->getTransferStarCount(),
            'next_transfer_date' => $this->getNextTransferDate(),
            'next_resale_date' => $this->getNextResaleDate(),
            'export_date' => $this->getExportDate(),
        ];
    }
}
