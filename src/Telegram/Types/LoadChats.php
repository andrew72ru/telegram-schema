<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads more chats from a chat list. The loaded chats and their positions in the chat list will be sent through updates. Chats are sorted by the pair (chat.position.order, chat.id) in descending order. Returns a 404 error if all chats have been loaded.
 */
class LoadChats extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The chat list in which to load chats; pass null to load chats from the main chat list */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** The maximum number of chats to be loaded. For optimal performance, the number of loaded chats is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The chat list in which to load chats; pass null to load chats from the main chat list.
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set The chat list in which to load chats; pass null to load chats from the main chat list.
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    /**
     * Get The maximum number of chats to be loaded. For optimal performance, the number of loaded chats is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of chats to be loaded. For optimal performance, the number of loaded chats is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loadChats',
            'chat_list' => $this->getChatList(),
            'limit' => $this->getLimit(),
        ];
    }
}
