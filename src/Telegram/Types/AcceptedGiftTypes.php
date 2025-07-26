<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes gift types that are accepted by a user
 */
class AcceptedGiftTypes implements \JsonSerializable
{
    public function __construct(
        /** True, if unlimited regular gifts are accepted */
        #[SerializedName('unlimited_gifts')]
        private bool $unlimitedGifts,
        /** True, if limited regular gifts are accepted */
        #[SerializedName('limited_gifts')]
        private bool $limitedGifts,
        /** True, if upgraded gifts and regular gifts that can be upgraded for free are accepted */
        #[SerializedName('upgraded_gifts')]
        private bool $upgradedGifts,
        /** True, if Telegram Premium subscription is accepted */
        #[SerializedName('premium_subscription')]
        private bool $premiumSubscription,
    ) {
    }

    /**
     * Get True, if unlimited regular gifts are accepted
     */
    public function getUnlimitedGifts(): bool
    {
        return $this->unlimitedGifts;
    }

    /**
     * Set True, if unlimited regular gifts are accepted
     */
    public function setUnlimitedGifts(bool $unlimitedGifts): self
    {
        $this->unlimitedGifts = $unlimitedGifts;

        return $this;
    }

    /**
     * Get True, if limited regular gifts are accepted
     */
    public function getLimitedGifts(): bool
    {
        return $this->limitedGifts;
    }

    /**
     * Set True, if limited regular gifts are accepted
     */
    public function setLimitedGifts(bool $limitedGifts): self
    {
        $this->limitedGifts = $limitedGifts;

        return $this;
    }

    /**
     * Get True, if upgraded gifts and regular gifts that can be upgraded for free are accepted
     */
    public function getUpgradedGifts(): bool
    {
        return $this->upgradedGifts;
    }

    /**
     * Set True, if upgraded gifts and regular gifts that can be upgraded for free are accepted
     */
    public function setUpgradedGifts(bool $upgradedGifts): self
    {
        $this->upgradedGifts = $upgradedGifts;

        return $this;
    }

    /**
     * Get True, if Telegram Premium subscription is accepted
     */
    public function getPremiumSubscription(): bool
    {
        return $this->premiumSubscription;
    }

    /**
     * Set True, if Telegram Premium subscription is accepted
     */
    public function setPremiumSubscription(bool $premiumSubscription): self
    {
        $this->premiumSubscription = $premiumSubscription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'acceptedGiftTypes',
            'unlimited_gifts' => $this->getUnlimitedGifts(),
            'limited_gifts' => $this->getLimitedGifts(),
            'upgraded_gifts' => $this->getUpgradedGifts(),
            'premium_subscription' => $this->getPremiumSubscription(),
        ];
    }
}
