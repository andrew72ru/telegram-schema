<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sticker is a regular sticker @premium_animation Premium animation of the sticker; may be null. If present, only Telegram Premium users can use the sticker
 */
class StickerFullTypeRegular extends StickerFullType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('premium_animation')]
        private File|null $premiumAnimation = null,
    ) {
    }

    public function getPremiumAnimation(): File|null
    {
        return $this->premiumAnimation;
    }

    public function setPremiumAnimation(File|null $premiumAnimation): self
    {
        $this->premiumAnimation = $premiumAnimation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFullTypeRegular',
            'premium_animation' => $this->getPremiumAnimation(),
        ];
    }
}
