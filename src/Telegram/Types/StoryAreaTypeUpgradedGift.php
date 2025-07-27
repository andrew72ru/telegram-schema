<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area with an upgraded gift.
 */
class StoryAreaTypeUpgradedGift extends StoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Unique name of the upgraded gift */
        #[SerializedName('gift_name')]
        private string $giftName,
    ) {
    }

    /**
     * Get Unique name of the upgraded gift.
     */
    public function getGiftName(): string
    {
        return $this->giftName;
    }

    /**
     * Set Unique name of the upgraded gift.
     */
    public function setGiftName(string $giftName): self
    {
        $this->giftName = $giftName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyAreaTypeUpgradedGift',
            'gift_name' => $this->getGiftName(),
        ];
    }
}
