<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A newly created basic group.
 */
class PushMessageContentBasicGroupChatCreate extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentBasicGroupChatCreate',
        ];
    }
}
