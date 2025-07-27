<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat invite link was revoked @invite_link The invite link.
 */
class ChatEventInviteLinkRevoked extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
    ) {
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
            '@type' => 'chatEventInviteLinkRevoked',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
