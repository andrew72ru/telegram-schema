<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a received gift @received_gift_id Identifier of the gift
 */
class GetReceivedGift extends ReceivedGift implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
    ) {
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getReceivedGift',
            'received_gift_id' => $this->getReceivedGiftId(),
        ];
    }
}
