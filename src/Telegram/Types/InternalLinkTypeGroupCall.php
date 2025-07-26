<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a group call that isn't bound to a chat. Use getGroupCallParticipants to get the list of group call participants and show them on the join group call screen.
 */
class InternalLinkTypeGroupCall extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Internal representation of the invite link */
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    /**
     * Get Internal representation of the invite link
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Internal representation of the invite link
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeGroupCall',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
