<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A list of chats usually located at the top of the main chat list. Unmuted chats are automatically moved from the Archive to the Main chat list when a new message arrives
 */
class ChatListArchive extends ChatList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatListArchive',
        ];
    }
}
