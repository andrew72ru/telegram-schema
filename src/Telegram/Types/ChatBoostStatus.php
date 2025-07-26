<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes current boost status of a chat
 */
class ChatBoostStatus implements \JsonSerializable
{
    public function __construct(
        /** An HTTP URL, which can be used to boost the chat */
        #[SerializedName('boost_url')]
        private string $boostUrl,
        /** Identifiers of boost slots of the current user applied to the chat */
        #[SerializedName('applied_slot_ids')]
        private array|null $appliedSlotIds = null,
        /** Current boost level of the chat */
        #[SerializedName('level')]
        private int $level,
        /** The number of boosts received by the chat from created Telegram Premium gift codes and giveaways; always 0 if the current user isn't an administrator in the chat */
        #[SerializedName('gift_code_boost_count')]
        private int $giftCodeBoostCount,
        /** The number of boosts received by the chat */
        #[SerializedName('boost_count')]
        private int $boostCount,
        /** The number of boosts added to reach the current level */
        #[SerializedName('current_level_boost_count')]
        private int $currentLevelBoostCount,
        /** The number of boosts needed to reach the next level; 0 if the next level isn't available */
        #[SerializedName('next_level_boost_count')]
        private int $nextLevelBoostCount,
        /** Approximate number of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat */
        #[SerializedName('premium_member_count')]
        private int $premiumMemberCount,
        /** A percentage of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat */
        #[SerializedName('premium_member_percentage')]
        private float $premiumMemberPercentage,
        /** The list of prepaid giveaways available for the chat; only for chat administrators */
        #[SerializedName('prepaid_giveaways')]
        private array|null $prepaidGiveaways = null,
    ) {
    }

    /**
     * Get An HTTP URL, which can be used to boost the chat
     */
    public function getBoostUrl(): string
    {
        return $this->boostUrl;
    }

    /**
     * Set An HTTP URL, which can be used to boost the chat
     */
    public function setBoostUrl(string $boostUrl): self
    {
        $this->boostUrl = $boostUrl;

        return $this;
    }

    /**
     * Get Identifiers of boost slots of the current user applied to the chat
     */
    public function getAppliedSlotIds(): array|null
    {
        return $this->appliedSlotIds;
    }

    /**
     * Set Identifiers of boost slots of the current user applied to the chat
     */
    public function setAppliedSlotIds(array|null $appliedSlotIds): self
    {
        $this->appliedSlotIds = $appliedSlotIds;

        return $this;
    }

    /**
     * Get Current boost level of the chat
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set Current boost level of the chat
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get The number of boosts received by the chat from created Telegram Premium gift codes and giveaways; always 0 if the current user isn't an administrator in the chat
     */
    public function getGiftCodeBoostCount(): int
    {
        return $this->giftCodeBoostCount;
    }

    /**
     * Set The number of boosts received by the chat from created Telegram Premium gift codes and giveaways; always 0 if the current user isn't an administrator in the chat
     */
    public function setGiftCodeBoostCount(int $giftCodeBoostCount): self
    {
        $this->giftCodeBoostCount = $giftCodeBoostCount;

        return $this;
    }

    /**
     * Get The number of boosts received by the chat
     */
    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    /**
     * Set The number of boosts received by the chat
     */
    public function setBoostCount(int $boostCount): self
    {
        $this->boostCount = $boostCount;

        return $this;
    }

    /**
     * Get The number of boosts added to reach the current level
     */
    public function getCurrentLevelBoostCount(): int
    {
        return $this->currentLevelBoostCount;
    }

    /**
     * Set The number of boosts added to reach the current level
     */
    public function setCurrentLevelBoostCount(int $currentLevelBoostCount): self
    {
        $this->currentLevelBoostCount = $currentLevelBoostCount;

        return $this;
    }

    /**
     * Get The number of boosts needed to reach the next level; 0 if the next level isn't available
     */
    public function getNextLevelBoostCount(): int
    {
        return $this->nextLevelBoostCount;
    }

    /**
     * Set The number of boosts needed to reach the next level; 0 if the next level isn't available
     */
    public function setNextLevelBoostCount(int $nextLevelBoostCount): self
    {
        $this->nextLevelBoostCount = $nextLevelBoostCount;

        return $this;
    }

    /**
     * Get Approximate number of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     */
    public function getPremiumMemberCount(): int
    {
        return $this->premiumMemberCount;
    }

    /**
     * Set Approximate number of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     */
    public function setPremiumMemberCount(int $premiumMemberCount): self
    {
        $this->premiumMemberCount = $premiumMemberCount;

        return $this;
    }

    /**
     * Get A percentage of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     */
    public function getPremiumMemberPercentage(): float
    {
        return $this->premiumMemberPercentage;
    }

    /**
     * Set A percentage of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     */
    public function setPremiumMemberPercentage(float $premiumMemberPercentage): self
    {
        $this->premiumMemberPercentage = $premiumMemberPercentage;

        return $this;
    }

    /**
     * Get The list of prepaid giveaways available for the chat; only for chat administrators
     */
    public function getPrepaidGiveaways(): array|null
    {
        return $this->prepaidGiveaways;
    }

    /**
     * Set The list of prepaid giveaways available for the chat; only for chat administrators
     */
    public function setPrepaidGiveaways(array|null $prepaidGiveaways): self
    {
        $this->prepaidGiveaways = $prepaidGiveaways;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostStatus',
            'boost_url' => $this->getBoostUrl(),
            'applied_slot_ids' => $this->getAppliedSlotIds(),
            'level' => $this->getLevel(),
            'gift_code_boost_count' => $this->getGiftCodeBoostCount(),
            'boost_count' => $this->getBoostCount(),
            'current_level_boost_count' => $this->getCurrentLevelBoostCount(),
            'next_level_boost_count' => $this->getNextLevelBoostCount(),
            'premium_member_count' => $this->getPremiumMemberCount(),
            'premium_member_percentage' => $this->getPremiumMemberPercentage(),
            'prepaid_giveaways' => $this->getPrepaidGiveaways(),
        ];
    }
}
