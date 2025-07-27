<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The worst available video quality.
 */
class GroupCallVideoQualityThumbnail extends GroupCallVideoQuality implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallVideoQualityThumbnail',
        ];
    }
}
