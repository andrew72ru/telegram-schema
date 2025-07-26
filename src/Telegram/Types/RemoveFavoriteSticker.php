<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a sticker from the list of favorite stickers @sticker Sticker file to delete from the list
 */
class RemoveFavoriteSticker extends Ok implements \JsonSerializable
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
            '@type' => 'removeFavoriteSticker',
            'sticker' => $this->getSticker(),
        ];
    }
}
