<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a transfer of an upgraded gift; for regular users only @owner_id Identifier of the user or the channel that received the gift @gift The gift.
 */
class StarTransactionTypeGiftTransfer extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
    ) {
    }

    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

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
            '@type' => 'starTransactionTypeGiftTransfer',
            'owner_id' => $this->getOwnerId(),
            'gift' => $this->getGift(),
        ];
    }
}
