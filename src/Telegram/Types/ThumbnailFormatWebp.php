<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The thumbnail is in WEBP format. It will be used only for some stickers and sticker sets.
 */
class ThumbnailFormatWebp extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatWebp',
        ];
    }
}
