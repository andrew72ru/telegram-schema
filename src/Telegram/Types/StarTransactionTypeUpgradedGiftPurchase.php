<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of an upgraded gift for some user or channel; for regular users only @user_id Identifier of the user that sold the gift @gift The gift.
 */
class StarTransactionTypeUpgradedGiftPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getGift(): UpgradedGift|null
    {
        return $this->gift;
    }

    public function setGift(UpgradedGift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeUpgradedGiftPurchase',
            'user_id' => $this->getUserId(),
            'gift' => $this->getGift(),
        ];
    }
}
