<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from a chat event log.
 */
class MessageSourceChatEventLog extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceChatEventLog',
        ];
    }
}
