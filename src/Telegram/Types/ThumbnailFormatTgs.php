<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The thumbnail is in TGS format. It will be used only for sticker sets
 */
class ThumbnailFormatTgs extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatTgs',
        ];
    }
}
