<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A custom reason provided by the user
 */
class ReportReasonCustom extends ReportReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportReasonCustom',
        ];
    }
}
