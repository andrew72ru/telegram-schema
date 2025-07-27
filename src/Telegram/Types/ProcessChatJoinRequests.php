<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Handles all pending join requests for a given link in a chat.
 */
class ProcessChatJoinRequests extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link for which to process join requests. If empty, all join requests will be processed. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Pass true to approve all requests; pass false to decline them */
        #[SerializedName('approve')]
        private bool $approve,
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
     * Get Invite link for which to process join requests. If empty, all join requests will be processed. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link for which to process join requests. If empty, all join requests will be processed. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Pass true to approve all requests; pass false to decline them.
     */
    public function getApprove(): bool
    {
        return $this->approve;
    }

    /**
     * Set Pass true to approve all requests; pass false to decline them.
     */
    public function setApprove(bool $approve): self
    {
        $this->approve = $approve;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'processChatJoinRequests',
            'chat_id' => $this->getChatId(),
            'invite_link' => $this->getInviteLink(),
            'approve' => $this->getApprove(),
        ];
    }
}
