<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The thumbnail is in PNG format. It will be used only for background patterns
 */
class ThumbnailFormatPng extends ThumbnailFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'thumbnailFormatPng',
        ];
    }
}
