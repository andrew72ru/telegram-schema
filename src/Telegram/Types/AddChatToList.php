<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a chat to a chat list. A chat can't be simultaneously in Main and Archive chat lists, so it is automatically removed from another one if needed.
 */
class AddChatToList extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The chat list. Use getChatListsToAddChat to get suitable chat lists */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The chat list. Use getChatListsToAddChat to get suitable chat lists.
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set The chat list. Use getChatListsToAddChat to get suitable chat lists.
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addChatToList',
            'chat_id' => $this->getChatId(),
            'chat_list' => $this->getChatList(),
        ];
    }
}
