<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area with an upgraded gift @gift_name Unique name of the upgraded gift
 */
class InputStoryAreaTypeUpgradedGift extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('gift_name')]
        private string $giftName,
    ) {
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function setGiftName(string $giftName): self
    {
        $this->giftName = $giftName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypeUpgradedGift',
            'gift_name' => $this->getGiftName(),
        ];
    }
}
