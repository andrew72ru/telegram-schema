<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat contains copyrighted content.
 */
class ReportReasonCopyright extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonCopyright',
        ];
    }
}
