<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Uses an invite link to add the current user to the chat if possible. May return an error with a message "INVITE_REQUEST_SENT" if only a join request was created @invite_link Invite link to use.
 */
class JoinChatByInviteLink extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'joinChatByInviteLink',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
