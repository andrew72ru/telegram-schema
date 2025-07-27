<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Number of unread messages in a chat list has changed. This update is sent only if the message database is used.
 */
class UpdateUnreadMessageCount extends Update implements \JsonSerializable
{
    public function __construct(
        /** The chat list with changed number of unread messages */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** Total number of unread messages */
        #[SerializedName('unread_count')]
        private int $unreadCount,
        /** Total number of unread messages in unmuted chats */
        #[SerializedName('unread_unmuted_count')]
        private int $unreadUnmutedCount,
    ) {
    }

    /**
     * Get The chat list with changed number of unread messages.
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set The chat list with changed number of unread messages.
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    /**
     * Get Total number of unread messages.
     */
    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    /**
     * Set Total number of unread messages.
     */
    public function setUnreadCount(int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * Get Total number of unread messages in unmuted chats.
     */
    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }

    /**
     * Set Total number of unread messages in unmuted chats.
     */
    public function setUnreadUnmutedCount(int $unreadUnmutedCount): self
    {
        $this->unreadUnmutedCount = $unreadUnmutedCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUnreadMessageCount',
            'chat_list' => $this->getChatList(),
            'unread_count' => $this->getUnreadCount(),
            'unread_unmuted_count' => $this->getUnreadUnmutedCount(),
        ];
    }
}
