<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A main list of chats
 */
class ChatListMain extends ChatList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatListMain',
        ];
    }
}
