<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a gift that can be sent to another user or channel chat
 */
class Gift implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the gift */
        #[SerializedName('id')]
        private int $id,
        /** The sticker representing the gift */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** Number of Telegram Stars that must be paid for the gift */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed */
        #[SerializedName('default_sell_star_count')]
        private int $defaultSellStarCount,
        /** Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible */
        #[SerializedName('upgrade_star_count')]
        private int $upgradeStarCount,
        /** True, if the gift is a birthday gift */
        #[SerializedName('is_for_birthday')]
        private bool $isForBirthday,
        /** Number of remaining times the gift can be purchased; 0 if not limited or the gift was sold out */
        #[SerializedName('remaining_count')]
        private int $remainingCount,
        /** Number of total times the gift can be purchased; 0 if not limited */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only */
        #[SerializedName('first_send_date')]
        private int $firstSendDate,
        /** Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only */
        #[SerializedName('last_send_date')]
        private int $lastSendDate,
    ) {
    }

    /**
     * Get Unique identifier of the gift
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the gift
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The sticker representing the gift
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set The sticker representing the gift
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid for the gift
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid for the gift
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed
     */
    public function getDefaultSellStarCount(): int
    {
        return $this->defaultSellStarCount;
    }

    /**
     * Set Number of Telegram Stars that can be claimed by the receiver instead of the regular gift by default. If the gift was paid with just bought Telegram Stars, then full value can be claimed
     */
    public function setDefaultSellStarCount(int $defaultSellStarCount): self
    {
        $this->defaultSellStarCount = $defaultSellStarCount;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible
     */
    public function getUpgradeStarCount(): int
    {
        return $this->upgradeStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid to upgrade the gift; 0 if upgrade isn't possible
     */
    public function setUpgradeStarCount(int $upgradeStarCount): self
    {
        $this->upgradeStarCount = $upgradeStarCount;

        return $this;
    }

    /**
     * Get True, if the gift is a birthday gift
     */
    public function getIsForBirthday(): bool
    {
        return $this->isForBirthday;
    }

    /**
     * Set True, if the gift is a birthday gift
     */
    public function setIsForBirthday(bool $isForBirthday): self
    {
        $this->isForBirthday = $isForBirthday;

        return $this;
    }

    /**
     * Get Number of remaining times the gift can be purchased; 0 if not limited or the gift was sold out
     */
    public function getRemainingCount(): int
    {
        return $this->remainingCount;
    }

    /**
     * Set Number of remaining times the gift can be purchased; 0 if not limited or the gift was sold out
     */
    public function setRemainingCount(int $remainingCount): self
    {
        $this->remainingCount = $remainingCount;

        return $this;
    }

    /**
     * Get Number of total times the gift can be purchased; 0 if not limited
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Number of total times the gift can be purchased; 0 if not limited
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only
     */
    public function getFirstSendDate(): int
    {
        return $this->firstSendDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift was send for the first time; for sold out gifts only
     */
    public function setFirstSendDate(int $firstSendDate): self
    {
        $this->firstSendDate = $firstSendDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only
     */
    public function getLastSendDate(): int
    {
        return $this->lastSendDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the gift was send for the last time; for sold out gifts only
     */
    public function setLastSendDate(int $lastSendDate): self
    {
        $this->lastSendDate = $lastSendDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'gift',
            'id' => $this->getId(),
            'sticker' => $this->getSticker(),
            'star_count' => $this->getStarCount(),
            'default_sell_star_count' => $this->getDefaultSellStarCount(),
            'upgrade_star_count' => $this->getUpgradeStarCount(),
            'is_for_birthday' => $this->getIsForBirthday(),
            'remaining_count' => $this->getRemainingCount(),
            'total_count' => $this->getTotalCount(),
            'first_send_date' => $this->getFirstSendDate(),
            'last_send_date' => $this->getLastSendDate(),
        ];
    }
}
