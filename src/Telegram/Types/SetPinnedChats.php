<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of pinned chats @chat_list Chat list in which to change the order of pinned chats @chat_ids The new list of pinned chats.
 */
class SetPinnedChats extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
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

    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPinnedChats',
            'chat_list' => $this->getChatList(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
