<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat has illegal drugs related content.
 */
class ReportReasonIllegalDrugs extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonIllegalDrugs',
        ];
    }
}
