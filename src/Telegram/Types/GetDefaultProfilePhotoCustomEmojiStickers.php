<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns default list of custom emoji stickers for placing on a profile photo.
 */
class GetDefaultProfilePhotoCustomEmojiStickers extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDefaultProfilePhotoCustomEmojiStickers',
        ];
    }
}
