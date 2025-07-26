<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a chat member joined a chat via an invite link
 */
class ChatInviteLinkMember implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Point in time (Unix timestamp) when the user joined the chat */
        #[SerializedName('joined_chat_date')]
        private int $joinedChatDate,
        /** True, if the user has joined the chat using an invite link for a chat folder */
        #[SerializedName('via_chat_folder_invite_link')]
        private bool $viaChatFolderInviteLink,
        /** User identifier of the chat administrator, approved user join request */
        #[SerializedName('approver_user_id')]
        private int $approverUserId,
    ) {
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user joined the chat
     */
    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user joined the chat
     */
    public function setJoinedChatDate(int $joinedChatDate): self
    {
        $this->joinedChatDate = $joinedChatDate;

        return $this;
    }

    /**
     * Get True, if the user has joined the chat using an invite link for a chat folder
     */
    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    /**
     * Set True, if the user has joined the chat using an invite link for a chat folder
     */
    public function setViaChatFolderInviteLink(bool $viaChatFolderInviteLink): self
    {
        $this->viaChatFolderInviteLink = $viaChatFolderInviteLink;

        return $this;
    }

    /**
     * Get User identifier of the chat administrator, approved user join request
     */
    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }

    /**
     * Set User identifier of the chat administrator, approved user join request
     */
    public function setApproverUserId(int $approverUserId): self
    {
        $this->approverUserId = $approverUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinkMember',
            'user_id' => $this->getUserId(),
            'joined_chat_date' => $this->getJoinedChatDate(),
            'via_chat_folder_invite_link' => $this->getViaChatFolderInviteLink(),
            'approver_user_id' => $this->getApproverUserId(),
        ];
    }
}
