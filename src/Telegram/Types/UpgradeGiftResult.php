<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains result of gift upgrading
 */
class UpgradeGiftResult implements \JsonSerializable
{
    public function __construct(
        /** The upgraded gift */
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
        /** Unique identifier of the received gift for the current user */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** True, if the gift is displayed on the user's or the channel's profile page */
        #[SerializedName('is_saved')]
        private bool $isSaved,
        /** True, if the gift can be transferred to another owner */
        #[SerializedName('can_be_transferred')]
        private bool $canBeTransferred,
        /** Number of Telegram Stars that must be paid to transfer the upgraded gift */
        #[SerializedName('transfer_star_count')]
        private int $transferStarCount,
        /** Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible */
        #[SerializedName('next_transfer_date')]
        private int $nextTransferDate,
        /** Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift */
        #[SerializedName('next_resale_date')]
        private int $nextResaleDate,
        /** Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT */
        #[SerializedName('export_date')]
        private int $exportDate,
    ) {
    }

    /**
     * Get The upgraded gift
     */
    public function getGift(): UpgradedGift|null
    {
        return $this->gift;
    }

    /**
     * Set The upgraded gift
     */
    public function setGift(UpgradedGift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get Unique identifier of the received gift for the current user
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Unique identifier of the received gift for the current user
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get True, if the gift is displayed on the user's or the channel's profile page
     */
    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    /**
     * Set True, if the gift is displayed on the user's or the channel's profile page
     */
    public function setIsSaved(bool $isSaved): self
    {
        $this->isSaved = $isSaved;

        return $this;
    }

    /**
     * Get True, if the gift can be transferred to another owner
     */
    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    /**
     * Set True, if the gift can be transferred to another owner
     */
    public function setCanBeTransferred(bool $canBeTransferred): self
    {
        $this->canBeTransferred = $canBeTransferred;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid to transfer the upgraded gift
     */
    public function getTransferStarCount(): int
    {
        return $this->transferStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid to transfer the upgraded gift
     */
    public function setTransferStarCount(int $transferStarCount): self
    {
        $this->transferStarCount = $transferStarCount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible
     */
    public function getNextTransferDate(): int
    {
        return $this->nextTransferDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible
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
     * Get Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT
     */
    public function getExportDate(): int
    {
        return $this->exportDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT
     */
    public function setExportDate(int $exportDate): self
    {
        $this->exportDate = $exportDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradeGiftResult',
            'gift' => $this->getGift(),
            'received_gift_id' => $this->getReceivedGiftId(),
            'is_saved' => $this->getIsSaved(),
            'can_be_transferred' => $this->getCanBeTransferred(),
            'transfer_star_count' => $this->getTransferStarCount(),
            'next_transfer_date' => $this->getNextTransferDate(),
            'next_resale_date' => $this->getNextResaleDate(),
            'export_date' => $this->getExportDate(),
        ];
    }
}
