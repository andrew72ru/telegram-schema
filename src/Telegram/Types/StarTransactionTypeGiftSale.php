<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of a received gift; for regular users and channel chats only @user_id Identifier of the user that sent the gift @gift The gift.
 */
class StarTransactionTypeGiftSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('gift')]
        private Gift|null $gift = null,
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

    public function getGift(): Gift|null
    {
        return $this->gift;
    }

    public function setGift(Gift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeGiftSale',
            'user_id' => $this->getUserId(),
            'gift' => $this->getGift(),
        ];
    }
}
