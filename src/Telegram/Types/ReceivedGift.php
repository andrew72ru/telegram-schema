<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a gift received by a user or a chat
 */
class ReceivedGift implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the received gift for the current user; only for the receiver of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** Identifier of a user or a chat that sent the gift; may be null if unknown */
        #[SerializedName('sender_id')]
        private MessageSender|null $senderId = null,
        /** Message added to the gift */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone are able to see them */
        #[SerializedName('is_private')]
        private bool $isPrivate,
        /** True, if the gift is displayed on the chat's profile page; only for the receiver of the gift */
        #[SerializedName('is_saved')]
        private bool $isSaved,
        /** True, if the gift is pinned to the top of the chat's profile page */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** True, if the gift is a regular gift that can be upgraded to a unique gift; only for the receiver of the gift */
        #[SerializedName('can_be_upgraded')]
        private bool $canBeUpgraded,
        /** True, if the gift is an upgraded gift that can be transferred to another owner; only for the receiver of the gift */
        #[SerializedName('can_be_transferred')]
        private bool $canBeTransferred,
        /** True, if the gift was refunded and isn't available anymore */
        #[SerializedName('was_refunded')]
        private bool $wasRefunded,
        /** Point in time (Unix timestamp) when the gift was sent */
        #[SerializedName('date')]
        private int $date,
        /** The gift */
        #[SerializedName('gift')]
        private SentGift|null $gift = null,
        /** Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the current user */
        #[SerializedName('sell_star_count')]
        private int $sellStarCount,
        /** Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift */
        #[SerializedName('prepaid_upgrade_star_count')]
        private int $prepaidUpgradeStarCount,
        /** Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift */
        #[SerializedName('transfer_star_count')]
        private int $transferStarCount,
        /** Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift */
        #[SerializedName('next_transfer_date')]
        private int $nextTransferDate,
        /** Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift */
        #[SerializedName('next_resale_date')]
        private int $nextResaleDate,
        /** Point in time (Unix timestamp) when the upgraded gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift */
        #[SerializedName('export_date')]
        private int $exportDate,
    ) {
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
     * Get Identifier of a user or a chat that sent the gift; may be null if unknown
     */
    public function getSenderId(): MessageSender|null
    {
        return $this->senderId;
    }

    /**
     * Set Identifier of a user or a chat that sent the gift; may be null if unknown
     */
    public function setSenderId(MessageSender|null $senderId): self
    {
        $this->senderId = $senderId;

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
     * Get True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone are able to see them
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * Set True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone are able to see them
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get True, if the gift is displayed on the chat's profile page; only for the receiver of the gift
     */
    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    /**
     * Set True, if the gift is displayed on the chat's profile page; only for the receiver of the gift
     */
    public function setIsSaved(bool $isSaved): self
    {
        $this->isSaved = $isSaved;

        return $this;
    }

    /**
     * Get True, if the gift is pinned to the top of the chat's profile page
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the gift is pinned to the top of the chat's profile page
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    /**
     * Get True, if the gift is a regular gift that can be upgraded to a unique gift; only for the receiver of the gift
     */
    public function getCanBeUpgraded(): bool
    {
        return $this->canBeUpgraded;
    }

    /**
     * Set True, if the gift is a regular gift that can be upgraded to a unique gift; only for the receiver of the gift
     */
    public function setCanBeUpgraded(bool $canBeUpgraded): self
    {
        $this->canBeUpgraded = $canBeUpgraded;

        return $this;
    }

    /**
     * Get True, if the gift is an upgraded gift that can be transferred to another owner; only for the receiver of the gift
     */
    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    /**
     * Set True, if the gift is an upgraded gift that can be transferred to another owner; only for the receiver of the gift
     */
    public function setCanBeTransferred(bool $canBeTransferred): self
    {
        $this->canBeTransferred = $canBeTransferred;

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
     * Get Point in time (Unix timestamp) when the gift was sent
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift was sent
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get The gift
     */
    public function getGift(): SentGift|null
    {
        return $this->gift;
    }

    /**
     * Set The gift
     */
    public function setGift(SentGift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the current user
     */
    public function getSellStarCount(): int
    {
        return $this->sellStarCount;
    }

    /**
     * Set Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the current user
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
     * Get Point in time (Unix timestamp) when the upgraded gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift
     */
    public function getExportDate(): int
    {
        return $this->exportDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the upgraded gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift
     */
    public function setExportDate(int $exportDate): self
    {
        $this->exportDate = $exportDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'receivedGift',
            'received_gift_id' => $this->getReceivedGiftId(),
            'sender_id' => $this->getSenderId(),
            'text' => $this->getText(),
            'is_private' => $this->getIsPrivate(),
            'is_saved' => $this->getIsSaved(),
            'is_pinned' => $this->getIsPinned(),
            'can_be_upgraded' => $this->getCanBeUpgraded(),
            'can_be_transferred' => $this->getCanBeTransferred(),
            'was_refunded' => $this->getWasRefunded(),
            'date' => $this->getDate(),
            'gift' => $this->getGift(),
            'sell_star_count' => $this->getSellStarCount(),
            'prepaid_upgrade_star_count' => $this->getPrepaidUpgradeStarCount(),
            'transfer_star_count' => $this->getTransferStarCount(),
            'next_transfer_date' => $this->getNextTransferDate(),
            'next_resale_date' => $this->getNextResaleDate(),
            'export_date' => $this->getExportDate(),
        ];
    }
}
