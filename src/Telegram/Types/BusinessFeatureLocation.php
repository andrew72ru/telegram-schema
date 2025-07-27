<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to set location.
 */
class BusinessFeatureLocation extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureLocation',
        ];
    }
}
