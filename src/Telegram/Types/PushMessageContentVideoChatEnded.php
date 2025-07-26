<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video chat or live stream has ended
 */
class PushMessageContentVideoChatEnded extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentVideoChatEnded',
        ];
    }
}
