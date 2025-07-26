<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The location-based chat is unrelated to its stated location
 */
class ReportReasonUnrelatedLocation extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonUnrelatedLocation',
        ];
    }
}
