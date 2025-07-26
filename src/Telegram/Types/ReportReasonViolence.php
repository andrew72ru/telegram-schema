<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat promotes violence
 */
class ReportReasonViolence extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonViolence',
        ];
    }
}
