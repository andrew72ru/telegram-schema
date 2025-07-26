<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the validity of an invite link for a chat and returns information about the corresponding chat @invite_link Invite link to be checked
 */
class CheckChatInviteLink extends ChatInviteLinkInfo implements \JsonSerializable
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
            '@type' => 'checkChatInviteLink',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
