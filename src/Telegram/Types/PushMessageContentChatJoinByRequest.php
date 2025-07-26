<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new member was accepted to the chat by an administrator
 */
class PushMessageContentChatJoinByRequest extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChatJoinByRequest',
        ];
    }
}
