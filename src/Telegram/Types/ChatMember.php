<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a user or a chat as a member of another chat
 */
class ChatMember implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat member. Currently, other chats can be only Left or Banned. Only supergroups and channels can have other chats as Left or Banned members and these chats must be supergroups or channels */
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
        /** Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown */
        #[SerializedName('inviter_user_id')]
        private int $inviterUserId,
        /** Point in time (Unix timestamp) when the user joined/was promoted/was banned in the chat */
        #[SerializedName('joined_chat_date')]
        private int $joinedChatDate,
        /** Status of the member in the chat */
        #[SerializedName('status')]
        private ChatMemberStatus|null $status = null,
    ) {
    }

    /**
     * Get Identifier of the chat member. Currently, other chats can be only Left or Banned. Only supergroups and channels can have other chats as Left or Banned members and these chats must be supergroups or channels
     */
    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    /**
     * Set Identifier of the chat member. Currently, other chats can be only Left or Banned. Only supergroups and channels can have other chats as Left or Banned members and these chats must be supergroups or channels
     */
    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown
     */
    public function getInviterUserId(): int
    {
        return $this->inviterUserId;
    }

    /**
     * Set Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown
     */
    public function setInviterUserId(int $inviterUserId): self
    {
        $this->inviterUserId = $inviterUserId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user joined/was promoted/was banned in the chat
     */
    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user joined/was promoted/was banned in the chat
     */
    public function setJoinedChatDate(int $joinedChatDate): self
    {
        $this->joinedChatDate = $joinedChatDate;

        return $this;
    }

    /**
     * Get Status of the member in the chat
     */
    public function getStatus(): ChatMemberStatus|null
    {
        return $this->status;
    }

    /**
     * Set Status of the member in the chat
     */
    public function setStatus(ChatMemberStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMember',
            'member_id' => $this->getMemberId(),
            'inviter_user_id' => $this->getInviterUserId(),
            'joined_chat_date' => $this->getJoinedChatDate(),
            'status' => $this->getStatus(),
        ];
    }
}
