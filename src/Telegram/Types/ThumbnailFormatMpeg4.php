<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The thumbnail is in MPEG4 format. It will be used only for some animations and videos
 */
class ThumbnailFormatMpeg4 extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatMpeg4',
        ];
    }
}
