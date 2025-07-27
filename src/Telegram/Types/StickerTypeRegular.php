<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The sticker is a regular sticker.
 */
class StickerTypeRegular extends StickerType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerTypeRegular',
        ];
    }
}
