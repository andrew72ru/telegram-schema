<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns identifiers of pinned or always included chats from a chat folder, which are suggested to be left when the chat folder is deleted @chat_folder_id Chat folder identifier.
 */
class GetChatFolderChatsToLeave extends Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_folder_id')]
        private int $chatFolderId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatFolderChatsToLeave',
            'chat_folder_id' => $this->getChatFolderId(),
        ];
    }
}
