<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat contains messages with personal details.
 */
class ReportReasonPersonalDetails extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonPersonalDetails',
        ];
    }
}
