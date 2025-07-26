<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A regular animated sticker @sticker The animated sticker with the dice animation
 */
class DiceStickersRegular extends DiceStickers implements \JsonSerializable
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
            '@type' => 'diceStickersRegular',
            'sticker' => $this->getSticker(),
        ];
    }
}
