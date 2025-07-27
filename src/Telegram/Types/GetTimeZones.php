<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of supported time zones.
 */
class GetTimeZones extends TimeZones implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getTimeZones',
        ];
    }
}
