<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the pinned state of a chat. There can be up to getOption("pinned_chat_count_max")/getOption("pinned_archived_chat_count_max") pinned non-secret chats and the same number of secret chats in the main/archive chat list. The limit can be increased with Telegram Premium.
 */
class ToggleChatIsPinned extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat list in which to change the pinned state of the chat */
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to pin the chat; pass false to unpin it */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Chat list in which to change the pinned state of the chat.
     */
    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    /**
     * Set Chat list in which to change the pinned state of the chat.
     */
    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
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
     * Get Pass true to pin the chat; pass false to unpin it.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set Pass true to pin the chat; pass false to unpin it.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatIsPinned',
            'chat_list' => $this->getChatList(),
            'chat_id' => $this->getChatId(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
