<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns favorite stickers.
 */
class GetFavoriteStickers extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getFavoriteStickers',
        ];
    }
}
