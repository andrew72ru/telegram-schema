<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The media is a photo. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
 */
class InputPaidMediaTypePhoto extends InputPaidMediaType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPaidMediaTypePhoto',
        ];
    }
}
