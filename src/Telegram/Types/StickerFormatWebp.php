<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The sticker is an image in WEBP format.
 */
class StickerFormatWebp extends StickerFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFormatWebp',
        ];
    }
}
