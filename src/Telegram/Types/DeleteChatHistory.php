<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all messages in the chat. Use chat.can_be_deleted_only_for_self and chat.can_be_deleted_for_all_users fields to find whether and how the method can be applied to the chat
 */
class DeleteChatHistory extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to remove the chat from all chat lists */
        #[SerializedName('remove_from_chat_list')]
        private bool $removeFromChatList,
        /** Pass true to delete chat history for all users */
        #[SerializedName('revoke')]
        private bool $revoke,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true to remove the chat from all chat lists
     */
    public function getRemoveFromChatList(): bool
    {
        return $this->removeFromChatList;
    }

    /**
     * Set Pass true to remove the chat from all chat lists
     */
    public function setRemoveFromChatList(bool $removeFromChatList): self
    {
        $this->removeFromChatList = $removeFromChatList;

        return $this;
    }

    /**
     * Get Pass true to delete chat history for all users
     */
    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    /**
     * Set Pass true to delete chat history for all users
     */
    public function setRevoke(bool $revoke): self
    {
        $this->revoke = $revoke;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatHistory',
            'chat_id' => $this->getChatId(),
            'remove_from_chat_list' => $this->getRemoveFromChatList(),
            'revoke' => $this->getRevoke(),
        ];
    }
}
