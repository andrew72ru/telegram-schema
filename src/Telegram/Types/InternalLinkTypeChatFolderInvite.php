<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is an invite link to a chat folder. Call checkChatFolderInviteLink with the given invite link to process the link.
 */
class InternalLinkTypeChatFolderInvite extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Internal representation of the invite link */
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    /**
     * Get Internal representation of the invite link.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Internal representation of the invite link.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeChatFolderInvite',
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
