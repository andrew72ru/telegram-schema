<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The best available video quality.
 */
class GroupCallVideoQualityFull extends GroupCallVideoQuality implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallVideoQualityFull',
        ];
    }
}
