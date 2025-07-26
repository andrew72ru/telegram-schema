<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns emoji corresponding to a sticker. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object @sticker Sticker file identifier
 */
class GetStickerEmojis extends Emojis implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStickerEmojis',
            'sticker' => $this->getSticker(),
        ];
    }
}
