<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a purchase of paid media from a bot or a business account by the current user; for regular users only.
 */
class StarTransactionTypeBotPaidMediaPurchase extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot or the business account user that sent the paid media */
        #[SerializedName('user_id')]
        private int $userId,
        /** The bought media if the transaction wasn't refunded */
        #[SerializedName('media')]
        private array|null $media = null,
    ) {
    }

    /**
     * Get Identifier of the bot or the business account user that sent the paid media.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the bot or the business account user that sent the paid media.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The bought media if the transaction wasn't refunded.
     */
    public function getMedia(): array|null
    {
        return $this->media;
    }

    /**
     * Set The bought media if the transaction wasn't refunded.
     */
    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBotPaidMediaPurchase',
            'user_id' => $this->getUserId(),
            'media' => $this->getMedia(),
        ];
    }
}
