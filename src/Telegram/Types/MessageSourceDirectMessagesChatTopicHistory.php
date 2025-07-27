<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from history of a topic in a channel direct messages chat administered by the current user.
 */
class MessageSourceDirectMessagesChatTopicHistory extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceDirectMessagesChatTopicHistory',
        ];
    }
}
