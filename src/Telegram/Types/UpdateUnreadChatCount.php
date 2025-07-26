<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Number of unread chats, i.e. with unread messages or marked as unread, has changed. This update is sent only if the message database is used
 */
class UpdateUnreadChatCount extends Update implements \JsonSerializable
{
    public function __construct(
        /** The chat list with changed number of unread messages */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** Approximate total number of chats in the chat list */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** Total number of unread chats */
        #[SerializedName('unread_count')]
        private int $unreadCount,
        /** Total number of unread unmuted chats */
        #[SerializedName('unread_unmuted_count')]
        private int $unreadUnmutedCount,
        /** Total number of chats marked as unread */
        #[SerializedName('marked_as_unread_count')]
        private int $markedAsUnreadCount,
        /** Total number of unmuted chats marked as unread */
        #[SerializedName('marked_as_unread_unmuted_count')]
        private int $markedAsUnreadUnmutedCount,
    ) {
    }

    /**
     * Get The chat list with changed number of unread messages
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set The chat list with changed number of unread messages
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    /**
     * Get Approximate total number of chats in the chat list
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Approximate total number of chats in the chat list
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get Total number of unread chats
     */
    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    /**
     * Set Total number of unread chats
     */
    public function setUnreadCount(int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * Get Total number of unread unmuted chats
     */
    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }

    /**
     * Set Total number of unread unmuted chats
     */
    public function setUnreadUnmutedCount(int $unreadUnmutedCount): self
    {
        $this->unreadUnmutedCount = $unreadUnmutedCount;

        return $this;
    }

    /**
     * Get Total number of chats marked as unread
     */
    public function getMarkedAsUnreadCount(): int
    {
        return $this->markedAsUnreadCount;
    }

    /**
     * Set Total number of chats marked as unread
     */
    public function setMarkedAsUnreadCount(int $markedAsUnreadCount): self
    {
        $this->markedAsUnreadCount = $markedAsUnreadCount;

        return $this;
    }

    /**
     * Get Total number of unmuted chats marked as unread
     */
    public function getMarkedAsUnreadUnmutedCount(): int
    {
        return $this->markedAsUnreadUnmutedCount;
    }

    /**
     * Set Total number of unmuted chats marked as unread
     */
    public function setMarkedAsUnreadUnmutedCount(int $markedAsUnreadUnmutedCount): self
    {
        $this->markedAsUnreadUnmutedCount = $markedAsUnreadUnmutedCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUnreadChatCount',
            'chat_list' => $this->getChatList(),
            'total_count' => $this->getTotalCount(),
            'unread_count' => $this->getUnreadCount(),
            'unread_unmuted_count' => $this->getUnreadUnmutedCount(),
            'marked_as_unread_count' => $this->getMarkedAsUnreadCount(),
            'marked_as_unread_unmuted_count' => $this->getMarkedAsUnreadUnmutedCount(),
        ];
    }
}
