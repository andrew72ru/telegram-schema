<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an upgraded gift @gift The gift.
 */
class LinkPreviewTypeUpgradedGift extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('gift')]
        private UpgradedGift|null $gift = null,
    ) {
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
            '@type' => 'linkPreviewTypeUpgradedGift',
            'gift' => $this->getGift(),
        ];
    }
}
