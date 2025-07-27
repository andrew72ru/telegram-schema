<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits an invite link for a chat folder.
 */
class EditChatFolderInviteLink extends ChatFolderInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat folder identifier */
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        /** Invite link to be edited */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** New name of the link; 0-32 characters */
        #[SerializedName('name')]
        private string $name,
        /** New identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link editing */
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
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
     * Get Invite link to be edited.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link to be edited.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get New name of the link; 0-32 characters.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set New name of the link; 0-32 characters.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get New identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link editing.
     */
    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    /**
     * Set New identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link editing.
     */
    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editChatFolderInviteLink',
            'chat_folder_id' => $this->getChatFolderId(),
            'invite_link' => $this->getInviteLink(),
            'name' => $this->getName(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
