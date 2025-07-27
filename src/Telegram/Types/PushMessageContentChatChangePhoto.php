<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A chat photo was edited.
 */
class PushMessageContentChatChangePhoto extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatChangePhoto',
        ];
    }
}
