<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user must choose messages to report and repeat the reportChat request with the chosen messages.
 */
class ReportChatResultMessagesRequired extends ReportChatResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChatResultMessagesRequired',
        ];
    }
}
