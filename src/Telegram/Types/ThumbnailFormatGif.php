<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The thumbnail is in static GIF format. It will be used only for some bot inline query results.
 */
class ThumbnailFormatGif extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatGif',
        ];
    }
}
