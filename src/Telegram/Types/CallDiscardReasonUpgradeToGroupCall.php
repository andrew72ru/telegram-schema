<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call was ended because it has been upgraded to a group call @invite_link Invite link for the group call
 */
class CallDiscardReasonUpgradeToGroupCall extends CallDiscardReason implements \JsonSerializable
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
            '@type' => 'callDiscardReasonUpgradeToGroupCall',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
