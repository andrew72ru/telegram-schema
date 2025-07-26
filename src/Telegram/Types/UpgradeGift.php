<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Upgrades a regular gift
 */
class UpgradeGift extends UpgradeGiftResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request; for bots only */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Identifier of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** Pass true to keep the original gift text, sender and receiver in the upgraded gift */
        #[SerializedName('keep_original_details')]
        private bool $keepOriginalDetails,
        /** The amount of Telegram Stars required to pay for the upgrade. It the gift has prepaid_upgrade_star_count > 0, then pass 0, otherwise, pass gift.upgrade_star_count */
        #[SerializedName('star_count')]
        private int $starCount,
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

    /**
     * Get Pass true to keep the original gift text, sender and receiver in the upgraded gift
     */
    public function getKeepOriginalDetails(): bool
    {
        return $this->keepOriginalDetails;
    }

    /**
     * Set Pass true to keep the original gift text, sender and receiver in the upgraded gift
     */
    public function setKeepOriginalDetails(bool $keepOriginalDetails): self
    {
        $this->keepOriginalDetails = $keepOriginalDetails;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars required to pay for the upgrade. It the gift has prepaid_upgrade_star_count > 0, then pass 0, otherwise, pass gift.upgrade_star_count
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The amount of Telegram Stars required to pay for the upgrade. It the gift has prepaid_upgrade_star_count > 0, then pass 0, otherwise, pass gift.upgrade_star_count
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradeGift',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'received_gift_id' => $this->getReceivedGiftId(),
            'keep_original_details' => $this->getKeepOriginalDetails(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
