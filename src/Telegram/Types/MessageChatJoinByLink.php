<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new member joined the chat via an invite link
 */
class MessageChatJoinByLink extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatJoinByLink',
        ];
    }
}
