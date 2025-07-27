<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An effect from a premium sticker @sticker The premium sticker. The effect can be found at sticker.full_type.premium_animation.
 */
class MessageEffectTypePremiumSticker extends MessageEffectType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
    ) {
    }

    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageEffectTypePremiumSticker',
            'sticker' => $this->getSticker(),
        ];
    }
}
