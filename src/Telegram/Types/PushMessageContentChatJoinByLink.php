<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A new member joined the chat via an invite link.
 */
class PushMessageContentChatJoinByLink extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatJoinByLink',
        ];
    }
}
