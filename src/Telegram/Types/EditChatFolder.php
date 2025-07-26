<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits existing chat folder. Returns information about the edited chat folder @chat_folder_id Chat folder identifier @folder The edited chat folder
 */
class EditChatFolder extends ChatFolderInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
        #[SerializedName('folder')]
        private ChatFolder|null $folder = null,
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

    public function getFolder(): ChatFolder|null
    {
        return $this->folder;
    }

    public function setFolder(ChatFolder|null $folder): self
    {
        $this->folder = $folder;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editChatFolder',
            'chat_folder_id' => $this->getChatFolderId(),
            'folder' => $this->getFolder(),
        ];
    }
}
