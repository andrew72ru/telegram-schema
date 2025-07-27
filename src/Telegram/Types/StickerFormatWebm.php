<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The sticker is a video in WEBM format.
 */
class StickerFormatWebm extends StickerFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFormatWebm',
        ];
    }
}
