<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A screenshot of a message in the chat has been taken.
 */
class PushMessageContentScreenshotTaken extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentScreenshotTaken',
        ];
    }
}
