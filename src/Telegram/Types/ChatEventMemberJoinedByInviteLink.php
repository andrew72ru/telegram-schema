<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new member joined the chat via an invite link @invite_link Invite link used to join the chat @via_chat_folder_invite_link True, if the user has joined the chat using an invite link for a chat folder.
 */
class ChatEventMemberJoinedByInviteLink extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link')]
        private ChatInviteLink|null $inviteLink = null,
        #[SerializedName('via_chat_folder_invite_link')]
        private bool $viaChatFolderInviteLink,
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

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    public function setViaChatFolderInviteLink(bool $viaChatFolderInviteLink): self
    {
        $this->viaChatFolderInviteLink = $viaChatFolderInviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberJoinedByInviteLink',
            'invite_link' => $this->getInviteLink(),
            'via_chat_folder_invite_link' => $this->getViaChatFolderInviteLink(),
        ];
    }
}
