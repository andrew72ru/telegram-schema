<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat invite link was edited @old_invite_link Previous information about the invite link @new_invite_link New information about the invite link
 */
class ChatEventInviteLinkEdited extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_invite_link')]
        private ChatInviteLink|null $oldInviteLink = null,
        #[SerializedName('new_invite_link')]
        private ChatInviteLink|null $newInviteLink = null,
    ) {
    }

    public function getOldInviteLink(): ChatInviteLink|null
    {
        return $this->oldInviteLink;
    }

    public function setOldInviteLink(ChatInviteLink|null $oldInviteLink): self
    {
        $this->oldInviteLink = $oldInviteLink;

        return $this;
    }

    public function getNewInviteLink(): ChatInviteLink|null
    {
        return $this->newInviteLink;
    }

    public function setNewInviteLink(ChatInviteLink|null $newInviteLink): self
    {
        $this->newInviteLink = $newInviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventInviteLinkEdited',
            'old_invite_link' => $this->getOldInviteLink(),
            'new_invite_link' => $this->getNewInviteLink(),
        ];
    }
}
