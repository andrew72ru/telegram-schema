<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Identifier of a gift model @sticker_id Identifier of the sticker representing the model
 */
class UpgradedGiftAttributeIdModel extends UpgradedGiftAttributeId implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker_id')]
        private int $stickerId,
    ) {
    }

    public function getStickerId(): int
    {
        return $this->stickerId;
    }

    public function setStickerId(int $stickerId): self
    {
        $this->stickerId = $stickerId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftAttributeIdModel',
            'sticker_id' => $this->getStickerId(),
        ];
    }
}
