<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns identifiers of chats from a chat folder, suitable for adding to a chat folder invite link @chat_folder_id Chat folder identifier.
 */
class GetChatsForChatFolderInviteLink extends Chats implements \JsonSerializable
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
            '@type' => 'getChatsForChatFolderInviteLink',
            'chat_folder_id' => $this->getChatFolderId(),
        ];
    }
}
