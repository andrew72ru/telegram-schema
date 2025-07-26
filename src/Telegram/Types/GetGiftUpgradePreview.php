<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns examples of possible upgraded gifts for a regular gift @gift_id Identifier of the gift
 */
class GetGiftUpgradePreview extends GiftUpgradePreview implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('gift_id')]
        private int $giftId,
    ) {
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function setGiftId(int $giftId): self
    {
        $this->giftId = $giftId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGiftUpgradePreview',
            'gift_id' => $this->getGiftId(),
        ];
    }
}
