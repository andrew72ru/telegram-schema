<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The thumbnail is in JPEG format.
 */
class ThumbnailFormatJpeg extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatJpeg',
        ];
    }
}
