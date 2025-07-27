<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A video chat or live stream was started.
 */
class PushMessageContentVideoChatStarted extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentVideoChatStarted',
        ];
    }
}
