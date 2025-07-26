<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat contains spam messages
 */
class ReportReasonSpam extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonSpam',
        ];
    }
}
