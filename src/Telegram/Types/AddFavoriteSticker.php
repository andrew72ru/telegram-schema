<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a new sticker to the list of favorite stickers. The new sticker is added to the top of the list. If the sticker was already in the list, it is removed from the list first.
 */
class AddFavoriteSticker extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker file to add */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    /**
     * Get Sticker file to add.
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker file to add.
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addFavoriteSticker',
            'sticker' => $this->getSticker(),
        ];
    }
}
