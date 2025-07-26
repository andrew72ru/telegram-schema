<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns invite links created by the current user for a shareable chat folder @chat_folder_id Chat folder identifier
 */
class GetChatFolderInviteLinks extends ChatFolderInviteLinks implements \JsonSerializable
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
            '@type' => 'getChatFolderInviteLinks',
            'chat_folder_id' => $this->getChatFolderId(),
        ];
    }
}
