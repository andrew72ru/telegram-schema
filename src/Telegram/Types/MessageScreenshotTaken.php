<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A screenshot of a message in the chat has been taken
 */
class MessageScreenshotTaken extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageScreenshotTaken',
        ];
    }
}
