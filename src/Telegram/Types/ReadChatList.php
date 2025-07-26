<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Traverse all chats in a chat list and marks all messages in the chats as read @chat_list Chat list in which to mark all chats as read
 */
class ReadChatList extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
    ) {
    }

    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readChatList',
            'chat_list' => $this->getChatList(),
        ];
    }
}
