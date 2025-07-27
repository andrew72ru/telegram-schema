<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to set opening hours.
 */
class BusinessFeatureOpeningHours extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureOpeningHours',
        ];
    }
}
