<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an invite link to a chat folder
 */
class ChatFolderInviteLinkInfo implements \JsonSerializable
{
    public function __construct(
        /** Basic information about the chat folder; chat folder identifier will be 0 if the user didn't have the chat folder yet */
        #[SerializedName('chat_folder_info')]
        private ChatFolderInfo|null $chatFolderInfo = null,
        /** Identifiers of the chats from the link, which aren't added to the folder yet */
        #[SerializedName('missing_chat_ids')]
        private array|null $missingChatIds = null,
        /** Identifiers of the chats from the link, which are added to the folder already */
        #[SerializedName('added_chat_ids')]
        private array|null $addedChatIds = null,
    ) {
    }

    /**
     * Get Basic information about the chat folder; chat folder identifier will be 0 if the user didn't have the chat folder yet
     */
    public function getChatFolderInfo(): ChatFolderInfo|null
    {
        return $this->chatFolderInfo;
    }

    /**
     * Set Basic information about the chat folder; chat folder identifier will be 0 if the user didn't have the chat folder yet
     */
    public function setChatFolderInfo(ChatFolderInfo|null $chatFolderInfo): self
    {
        $this->chatFolderInfo = $chatFolderInfo;

        return $this;
    }

    /**
     * Get Identifiers of the chats from the link, which aren't added to the folder yet
     */
    public function getMissingChatIds(): array|null
    {
        return $this->missingChatIds;
    }

    /**
     * Set Identifiers of the chats from the link, which aren't added to the folder yet
     */
    public function setMissingChatIds(array|null $missingChatIds): self
    {
        $this->missingChatIds = $missingChatIds;

        return $this;
    }

    /**
     * Get Identifiers of the chats from the link, which are added to the folder already
     */
    public function getAddedChatIds(): array|null
    {
        return $this->addedChatIds;
    }

    /**
     * Set Identifiers of the chats from the link, which are added to the folder already
     */
    public function setAddedChatIds(array|null $addedChatIds): self
    {
        $this->addedChatIds = $addedChatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolderInviteLinkInfo',
            'chat_folder_info' => $this->getChatFolderInfo(),
            'missing_chat_ids' => $this->getMissingChatIds(),
            'added_chat_ids' => $this->getAddedChatIds(),
        ];
    }
}
