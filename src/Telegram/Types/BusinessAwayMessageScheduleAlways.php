<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Send away messages always.
 */
class BusinessAwayMessageScheduleAlways extends BusinessAwayMessageSchedule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessAwayMessageScheduleAlways',
        ];
    }
}
