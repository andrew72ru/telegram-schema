<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new invite link for a chat folder. A link can be created for a chat folder if it has only pinned and included chats
 */
class CreateChatFolderInviteLink extends ChatFolderInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat folder identifier */
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        /** Name of the link; 0-32 characters */
        #[SerializedName('name')]
        private string $name,
        /** Identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link creation */
        #[SerializedName('chat_ids')]
        private array|null $chatIds = null,
    ) {
    }

    /**
     * Get Chat folder identifier
     */
    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    /**
     * Set Chat folder identifier
     */
    public function setChatFolderId(int $chatFolderId): self
    {
        $this->chatFolderId = $chatFolderId;

        return $this;
    }

    /**
     * Get Name of the link; 0-32 characters
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the link; 0-32 characters
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link creation
     */
    public function getChatIds(): array|null
    {
        return $this->chatIds;
    }

    /**
     * Set Identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link creation
     */
    public function setChatIds(array|null $chatIds): self
    {
        $this->chatIds = $chatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createChatFolderInviteLink',
            'chat_folder_id' => $this->getChatFolderId(),
            'name' => $this->getName(),
            'chat_ids' => $this->getChatIds(),
        ];
    }
}
