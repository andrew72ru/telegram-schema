<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the status of a chat member; requires can_invite_users member right to add a chat member, can_promote_members administrator right to change administrator rights of the member,.
 */
class SetChatMemberStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Member identifier. Chats can be only banned and unbanned in supergroups and channels */
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
        /** The new status of the member in the chat */
        #[SerializedName('status')]
        private ChatMemberStatus|null $status = null,
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
     * Get Member identifier. Chats can be only banned and unbanned in supergroups and channels.
     */
    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    /**
     * Set Member identifier. Chats can be only banned and unbanned in supergroups and channels.
     */
    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get The new status of the member in the chat.
     */
    public function getStatus(): ChatMemberStatus|null
    {
        return $this->status;
    }

    /**
     * Set The new status of the member in the chat.
     */
    public function setStatus(ChatMemberStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatMemberStatus',
            'chat_id' => $this->getChatId(),
            'member_id' => $this->getMemberId(),
            'status' => $this->getStatus(),
        ];
    }
}
