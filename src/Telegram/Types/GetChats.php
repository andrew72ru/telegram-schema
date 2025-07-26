<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an ordered list of chats from the beginning of a chat list. For informational purposes only. Use loadChats and updates processing instead to maintain chat lists in a consistent state
 */
class GetChats extends Chats implements \JsonSerializable
{
    public function __construct(
        /** The chat list in which to return chats; pass null to get chats from the main chat list */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** The maximum number of chats to be returned */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The chat list in which to return chats; pass null to get chats from the main chat list
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set The chat list in which to return chats; pass null to get chats from the main chat list
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    /**
     * Get The maximum number of chats to be returned
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of chats to be returned
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChats',
            'chat_list' => $this->getChatList(),
            'limit' => $this->getLimit(),
        ];
    }
}
