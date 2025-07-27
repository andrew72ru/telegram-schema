<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new member was accepted to the chat by an administrator @approver_user_id User identifier of the chat administrator, approved user join request @invite_link Invite link used to join the chat; may be null.
 */
class ChatEventMemberJoinedByRequest extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('approver_user_id')]
        private int $approverUserId,
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
    ) {
    }

    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }

    public function setApproverUserId(int $approverUserId): self
    {
        $this->approverUserId = $approverUserId;

        return $this;
    }

    public function getInviteLink(): ChatInviteLink|null
    {
        return $this->inviteLink;
    }

    public function setInviteLink(ChatInviteLink|null $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberJoinedByRequest',
            'approver_user_id' => $this->getApproverUserId(),
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
