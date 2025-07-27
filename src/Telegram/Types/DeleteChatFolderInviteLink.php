<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes an invite link for a chat folder.
 */
class DeleteChatFolderInviteLink extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat folder identifier */
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        /** Invite link to be deleted */
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    /**
     * Get Chat folder identifier.
     */
    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    /**
     * Set Chat folder identifier.
     */
    public function setChatFolderId(int $chatFolderId): self
    {
        $this->chatFolderId = $chatFolderId;

        return $this;
    }

    /**
     * Get Invite link to be deleted.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link to be deleted.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatFolderInviteLink',
            'chat_folder_id' => $this->getChatFolderId(),
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
