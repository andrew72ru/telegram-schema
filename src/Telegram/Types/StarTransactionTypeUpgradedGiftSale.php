<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of an upgraded gift; for regular users only
 */
class StarTransactionTypeUpgradedGiftSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the gift */
        #[SerializedName('user_id')]
        private int $userId,
        /** The gift */
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
        /** Information about commission received by Telegram from the transaction */
        #[SerializedName('affiliate')]
        private AffiliateInfo|null $affiliate = null,
    ) {
    }

    /**
     * Get Identifier of the user that bought the gift
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that bought the gift
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
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
     * Get Information about commission received by Telegram from the transaction
     */
    public function getAffiliate(): AffiliateInfo|null
    {
        return $this->affiliate;
    }

    /**
     * Set Information about commission received by Telegram from the transaction
     */
    public function setAffiliate(AffiliateInfo|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeUpgradedGiftSale',
            'user_id' => $this->getUserId(),
            'gift' => $this->getGift(),
            'affiliate' => $this->getAffiliate(),
        ];
    }
}
