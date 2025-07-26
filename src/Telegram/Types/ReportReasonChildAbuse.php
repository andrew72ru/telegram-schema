<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat has child abuse related content
 */
class ReportReasonChildAbuse extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonChildAbuse',
        ];
    }
}
