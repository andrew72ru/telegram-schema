<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Send away messages outside of the business opening hours.
 */
class BusinessAwayMessageScheduleOutsideOfOpeningHours extends BusinessAwayMessageSchedule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessAwayMessageScheduleOutsideOfOpeningHours',
        ];
    }
}
