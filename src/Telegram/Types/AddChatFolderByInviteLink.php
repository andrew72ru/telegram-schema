<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a chat folder by an invite link @invite_link Invite link for the chat folder @chat_ids Identifiers of the chats added to the chat folder. The chats are automatically joined if they aren't joined yet.
 */
class AddChatFolderByInviteLink extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('invite_link')]
        private string $inviteLink,
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
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

    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addChatFolderByInviteLink',
            'invite_link' => $this->getInviteLink(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
