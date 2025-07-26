<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of Telegram Premium subscription; for regular users and bots only
 */
class StarTransactionTypePremiumPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that received the Telegram Premium subscription */
        #[SerializedName('user_id')]
        private int $userId,
        /** Number of months the Telegram Premium subscription will be active */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** A sticker to be shown in the transaction information; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get Identifier of the user that received the Telegram Premium subscription
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that received the Telegram Premium subscription
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get A sticker to be shown in the transaction information; may be null if unknown
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set A sticker to be shown in the transaction information; may be null if unknown
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypePremiumPurchase',
            'user_id' => $this->getUserId(),
            'month_count' => $this->getMonthCount(),
            'sticker' => $this->getSticker(),
        ];
    }
}
