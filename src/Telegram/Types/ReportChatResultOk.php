<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat was reported successfully
 */
class ReportChatResultOk extends ReportChatResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChatResultOk',
        ];
    }
}
