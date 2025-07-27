<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The medium video quality.
 */
class GroupCallVideoQualityMedium extends GroupCallVideoQuality implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallVideoQualityMedium',
        ];
    }
}
