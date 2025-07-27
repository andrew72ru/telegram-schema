<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a sticker from the set to which it belongs. The sticker set must be owned by the current user @sticker Sticker to remove from the set.
 */
class RemoveStickerFromSet extends Ok implements \JsonSerializable
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
            '@type' => 'removeStickerFromSet',
            'sticker' => $this->getSticker(),
        ];
    }
}
