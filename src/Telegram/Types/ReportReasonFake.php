<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat represents a fake account.
 */
class ReportReasonFake extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonFake',
        ];
    }
}
