<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * User rights changed in a chat; for bots only
 */
class UpdateChatMember extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the user, changing the rights */
        #[SerializedName('actor_user_id')]
        private int $actorUserId,
        /** Point in time (Unix timestamp) when the user rights were changed */
        #[SerializedName('date')]
        private int $date,
        /** If user has joined the chat using an invite link, the invite link; may be null */
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
        /** True, if the user has joined the chat after sending a join request and being approved by an administrator */
        #[SerializedName('via_join_request')]
        private bool $viaJoinRequest,
        /** True, if the user has joined the chat using an invite link for a chat folder */
        #[SerializedName('via_chat_folder_invite_link')]
        private bool $viaChatFolderInviteLink,
        /** Previous chat member */
        #[SerializedName('old_chat_member')]
        private ChatMember|null $oldChatMember = null,
        /** New chat member */
        #[SerializedName('new_chat_member')]
        private ChatMember|null $newChatMember = null,
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
     * Get Identifier of the user, changing the rights
     */
    public function getActorUserId(): int
    {
        return $this->actorUserId;
    }

    /**
     * Set Identifier of the user, changing the rights
     */
    public function setActorUserId(int $actorUserId): self
    {
        $this->actorUserId = $actorUserId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user rights were changed
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the user rights were changed
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get If user has joined the chat using an invite link, the invite link; may be null
     */
    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }

    /**
     * Set If user has joined the chat using an invite link, the invite link; may be null
     */
    public function setInviteLink(ChatInviteLink|null $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get True, if the user has joined the chat after sending a join request and being approved by an administrator
     */
    public function getViaJoinRequest(): bool
    {
        return $this->viaJoinRequest;
    }

    /**
     * Set True, if the user has joined the chat after sending a join request and being approved by an administrator
     */
    public function setViaJoinRequest(bool $viaJoinRequest): self
    {
        $this->viaJoinRequest = $viaJoinRequest;

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
     * Get Previous chat member
     */
    public function getOldChatMember(): ChatMember|null
    {
        return $this->oldChatMember;
    }

    /**
     * Set Previous chat member
     */
    public function setOldChatMember(ChatMember|null $oldChatMember): self
    {
        $this->oldChatMember = $oldChatMember;

        return $this;
    }

    /**
     * Get New chat member
     */
    public function getNewChatMember(): ChatMember|null
    {
        return $this->newChatMember;
    }

    /**
     * Set New chat member
     */
    public function setNewChatMember(ChatMember|null $newChatMember): self
    {
        $this->newChatMember = $newChatMember;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatMember',
            'chat_id' => $this->getChatId(),
            'actor_user_id' => $this->getActorUserId(),
            'date' => $this->getDate(),
            'invite_link' => $this->getInviteLink(),
            'via_join_request' => $this->getViaJoinRequest(),
            'via_chat_folder_invite_link' => $this->getViaChatFolderInviteLink(),
            'old_chat_member' => $this->getOldChatMember(),
            'new_chat_member' => $this->getNewChatMember(),
        ];
    }
}
