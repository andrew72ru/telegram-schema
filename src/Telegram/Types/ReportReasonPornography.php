<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat contains pornographic messages.
 */
class ReportReasonPornography extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonPornography',
        ];
    }
}
