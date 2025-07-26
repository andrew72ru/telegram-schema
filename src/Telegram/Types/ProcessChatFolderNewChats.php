<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Process new chats added to a shareable chat folder by its owner @chat_folder_id Chat folder identifier @added_chat_ids Identifiers of the new chats, which are added to the chat folder. The chats are automatically joined if they aren't joined yet
 */
class ProcessChatFolderNewChats extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        #[SerializedName('added_chat_ids')]
        private array|null $addedChatIds = null,
    ) {
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function setChatFolderId(int $chatFolderId): self
    {
        $this->chatFolderId = $chatFolderId;

        return $this;
    }

    public function getAddedChatIds(): array|null
    {
        return $this->addedChatIds;
    }

    public function setAddedChatIds(array|null $addedChatIds): self
    {
        $this->addedChatIds = $addedChatIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'processChatFolderNewChats',
            'chat_folder_id' => $this->getChatFolderId(),
            'added_chat_ids' => $this->getAddedChatIds(),
        ];
    }
}
