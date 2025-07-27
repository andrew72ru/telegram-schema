<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a deposit of Telegram Stars by another user; for regular users only.
 */
class StarTransactionTypeUserDeposit extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that gifted Telegram Stars; 0 if the user was anonymous */
        #[SerializedName('user_id')]
        private int $userId,
        /** The sticker to be shown in the transaction information; may be null if unknown */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    /**
     * Get Identifier of the user that gifted Telegram Stars; 0 if the user was anonymous.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that gifted Telegram Stars; 0 if the user was anonymous.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The sticker to be shown in the transaction information; may be null if unknown.
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set The sticker to be shown in the transaction information; may be null if unknown.
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeUserDeposit',
            'user_id' => $this->getUserId(),
            'sticker' => $this->getSticker(),
        ];
    }
}
