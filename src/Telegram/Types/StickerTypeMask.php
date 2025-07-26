<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sticker is a mask in WEBP format to be placed on photos or videos
 */
class StickerTypeMask extends StickerType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerTypeMask',
        ];
    }
}
